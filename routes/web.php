<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Statamic\Facades\Search;
use Statamic\Facades\Entry;

// Temporary test route — verifies Builder API CORS works from this domain
Route::get('/builder-auth-test', function () {
    return response(<<<'HTML'
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="utf-8">
    <title>Builder Auth Test</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 60px auto; padding: 0 20px; }
        .result { margin-top: 24px; padding: 20px; border-radius: 8px; font-size: 1.1rem; font-weight: bold; }
        .checking { background: #f3f4f6; color: #374151; }
        .ok      { background: #d1fae5; color: #065f46; }
        .denied  { background: #fee2e2; color: #991b1b; }
        .error   { background: #fef3c7; color: #92400e; }
        pre { margin-top: 16px; padding: 12px; background: #f9fafb; border-radius: 6px; font-size: 0.85rem; white-space: pre-wrap; word-break: break-all; }
    </style>
</head>
<body>
    <h1>Builder Auth Test</h1>
    <p>This page checks whether the Builder session API is reachable from this domain.</p>

    <div id="result" class="result checking">Checking Builder session...</div>
    <pre id="detail"></pre>

    <script>
        const resultEl = document.getElementById('result');
        const detailEl = document.getElementById('detail');

        fetch('https://test.apprix.fi/b_dev_1/login/checkli', {
            method: 'GET',
            credentials: 'include',
        })
        .then(res => {
            detailEl.textContent = 'HTTP status: ' + res.status + '\nContent-Type: ' + res.headers.get('content-type');
            return res.text();
        })
        .then(body => {
            detailEl.textContent += '\nResponse body: ' + body;
            const val = body.trim();
            if (val === '1') {
                resultEl.className = 'result ok';
                resultEl.textContent = '✓ Logged in to Builder — access would be granted';
            } else if (val === '0') {
                resultEl.className = 'result denied';
                resultEl.textContent = '✗ Not logged in to Builder — would redirect to login';
            } else {
                resultEl.className = 'result error';
                resultEl.textContent = '? Unexpected response — see details below';
            }
        })
        .catch(err => {
            resultEl.className = 'result error';
            resultEl.textContent = '✗ CORS error or network failure — Builder needs to add CORS headers';
            detailEl.textContent = err.toString();
        });
    </script>
</body>
</html>
HTML, 200, ['Content-Type' => 'text/html']);
});

Route::get('/api/search', function (Request $request) {
    $query = $request->input('q', '');

    if (strlen($query) < 1) {
        return response()->json([]);
    }

    // Accept site handle from frontend; fall back to 'default'
    $currentSite = $request->input('site', 'default');

    // Slugs to exclude from results (404/error pages)
    $excludedSlugs = ['page-not-found', '404'];

    // Lowercase query terms for relevance scoring
    $terms = array_filter(explode(' ', mb_strtolower(trim($query))));

    $entryToItem = fn ($entry) => [
        'title'      => (string) ($entry->get('title') ?? ''),
        'url'        => (string) $entry->url(),
        'collection' => (string) ($entry->collection()?->handle() ?? 'page'),
    ];

    $filterAndMap = function ($items) use ($currentSite, $excludedSlugs, $entryToItem) {
        return $items
            ->filter(function ($item) use ($currentSite, $excludedSlugs) {
                $searchable = $item->getSearchable();

                if (! $searchable instanceof \Statamic\Entries\Entry) {
                    return false;
                }

                if (in_array($searchable->slug(), $excludedSlugs)) {
                    return false;
                }

                return $searchable->locale() === $currentSite;
            })
            ->map(function ($item) use ($entryToItem) {
                return $entryToItem($item->getSearchable());
            })
            ->filter(fn ($item) => !empty($item['url']) && !empty($item['title']));
    };

    // Relevance score: how many query terms appear in the title
    $score = function (array $item) use ($terms): int {
        $title = mb_strtolower($item['title']);
        $matches = 0;
        foreach ($terms as $term) {
            if (mb_strpos($title, $term) !== false) {
                $matches++;
            }
        }
        return ($matches === count($terms)) ? 100 : $matches * 10;
    };

    // Statamic's local driver requires ≥2 characters — for single-char queries,
    // fall back to a direct title scan across all entries in the indexed collections.
    if (mb_strlen($query) < 2) {
        $needle = mb_strtolower($query);

        $items = collect();
        foreach (['pages', 'articles'] as $collection) {
            $entries = Entry::query()
                ->where('collection', $collection)
                ->where('site', $currentSite)
                ->get()
                ->filter(function ($entry) use ($needle, $excludedSlugs) {
                    if (in_array($entry->slug(), $excludedSlugs)) return false;
                    return mb_strpos(mb_strtolower($entry->get('title') ?? ''), $needle) !== false;
                })
                ->map($entryToItem)
                ->filter(fn ($item) => !empty($item['url']) && !empty($item['title']));

            $items = $items->merge($entries);
        }

        $results = $items->unique('url')->sortByDesc($score)->take(12)->values();
        return response()->json($results);
    }

    // For ≥2 character queries use the search index (faster, also searches descriptions)
    $defaultResults = $filterAndMap(
        Search::index('default')->search($query)->limit(30)->get()
    );

    $articleResults = $filterAndMap(
        Search::index('articles')->search($query)->limit(20)->get()
    );

    $results = $defaultResults
        ->merge($articleResults)
        ->unique('url')
        ->sortByDesc($score)
        ->take(12)
        ->values();

    return response()->json($results);
});

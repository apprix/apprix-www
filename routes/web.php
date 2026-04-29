<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Statamic\Facades\Search;
use Statamic\Facades\Entry;

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

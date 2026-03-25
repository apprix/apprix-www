<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Statamic\Facades\Search;
use Statamic\Entries\Entry;

Route::get('/api/search', function (Request $request) {
    $query = $request->input('q', '');

    if (strlen($query) < 1) {
        return response()->json([]);
    }

    // Accept site handle from frontend; fall back to 'default'
    $currentSite = $request->input('site', 'default');

    // Slugs to exclude from results (404/error pages)
    $excludedSlugs = ['page-not-found', '404'];

    $filterAndMap = function ($items) use ($currentSite, $excludedSlugs) {
        return $items
            ->filter(function ($item) use ($currentSite, $excludedSlugs) {
                $searchable = $item->getSearchable();

                if (! $searchable instanceof Entry) {
                    return false;
                }

                // Exclude error/404 pages
                if (in_array($searchable->slug(), $excludedSlugs)) {
                    return false;
                }

                // Only include entries from the requested locale
                return $searchable->locale() === $currentSite;
            })
            ->map(function ($item) {
                $entry = $item->getSearchable();

                return [
                    'title' => (string) ($entry->get('title') ?? ''),
                    'url' => (string) $entry->url(),
                    'collection' => (string) ($entry->collection()?->handle() ?? 'page'),
                ];
            })
            ->filter(fn ($item) => !empty($item['url']) && !empty($item['title']));
    };

    // Search both indexes: pages and articles
    $defaultResults = $filterAndMap(
        Search::index('default')->search($query)->limit(30)->get()
    );

    $articleResults = $filterAndMap(
        Search::index('articles')->search($query)->limit(20)->get()
    );

    // Merge, deduplicate by URL, and limit
    $results = $defaultResults
        ->merge($articleResults)
        ->unique('url')
        ->take(12)
        ->values();

    return response()->json($results);
});

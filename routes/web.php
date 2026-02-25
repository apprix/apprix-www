<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Statamic\Facades\Search;
use Statamic\Facades\Site;
use Statamic\Entries\Entry;

Route::get('/api/search', function (Request $request) {
    $query = $request->input('q', '');

    if (strlen($query) < 2) {
        return response()->json([]);
    }

    $currentSite = Site::current()->handle();

    $results = Search::index('default')
        ->search($query)
        ->limit(50)
        ->get()
        ->filter(function ($item) use ($currentSite) {
            $searchable = $item->getSearchable();

            // Only keep Entry items (excludes assets, terms, etc.)
            if (! $searchable instanceof Entry) {
                return false;
            }

            // Only keep entries from the current site/locale
            return $searchable->locale() === $currentSite;
        })
        ->take(10)
        ->map(function ($item) {
            $entry = $item->getSearchable();

            return [
                'title' => (string) ($entry->get('title') ?? ''),
                'url' => (string) $entry->url(),
                'collection' => (string) ($entry->collection()?->handle() ?? 'page'),
            ];
        })
        ->filter(fn ($item) => !empty($item['url']) && !empty($item['title']))
        ->values();

    return response()->json($results);
});

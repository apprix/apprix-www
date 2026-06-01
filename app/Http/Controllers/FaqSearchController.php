<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\Facades\Entry;
use Statamic\Facades\Term;

class FaqSearchController extends Controller
{
    public function index(Request $request)
    {
        $site = in_array($request->input('site'), ['default', 'en']) ? $request->input('site') : 'default';

        // Build the category slug => title map once, up front, to avoid an N+1
        // Term::find() lookup per FAQ entry inside the map() below.
        $catMap = Term::query()
            ->where('taxonomy', 'faq_categories')
            ->get()
            ->mapWithKeys(fn ($t) => [$t->slug() => (string) ($t->get('title') ?? $t->slug())]);

        $entries = Entry::query()
            ->where('collection', 'faq')
            ->where('site', $site)
            ->orderBy('order')
            ->get()
            ->map(function ($entry) use ($catMap) {
                $catSlugs = $entry->get('faq_categories') ?? [];
                $catSlug  = is_array($catSlugs) ? ($catSlugs[0] ?? '') : (string) $catSlugs;
                $catTitle = $catSlug ? ($catMap[$catSlug] ?? $catSlug) : $catSlug;

                return [
                    'id'            => $entry->id(),
                    'question'      => (string) ($entry->get('title') ?? ''),
                    'category'      => $catTitle,
                    'category_slug' => $catSlug,
                ];
            })
            ->filter(fn ($item) => !empty($item['question']))
            ->values();

        return response()->json($entries)
            ->header('Cache-Control', 'public, max-age=3600');
    }
}

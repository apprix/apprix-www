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

        $entries = Entry::query()
            ->where('collection', 'faq')
            ->where('site', $site)
            ->orderBy('order')
            ->get()
            ->map(function ($entry) {
                $catSlugs = $entry->get('faq_categories') ?? [];
                $catSlug  = is_array($catSlugs) ? ($catSlugs[0] ?? '') : (string) $catSlugs;
                $term     = $catSlug ? Term::find('faq_categories::' . $catSlug) : null;
                $catTitle = $term ? (string) ($term->get('title') ?? $catSlug) : $catSlug;

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

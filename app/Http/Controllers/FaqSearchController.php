<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Statamic\Facades\Entry;

class FaqSearchController extends Controller
{
    public function index(Request $request)
    {
        $entries = Entry::query()
            ->where('collection', 'faq')
            ->where('site', 'default')
            ->orderBy('order')
            ->get()
            ->map(fn ($entry) => [
                'id'            => $entry->id(),
                'question'      => (string) ($entry->get('title') ?? ''),
                'category'      => (string) ($entry->get('category') ?? ''),
                'category_slug' => Str::slug((string) ($entry->get('category') ?? '')),
            ])
            ->filter(fn ($item) => !empty($item['question']))
            ->values();

        return response()->json($entries)
            ->header('Cache-Control', 'public, max-age=3600');
    }
}

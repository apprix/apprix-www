<?php

namespace App\Tags;

use Statamic\Facades\Entry;
use Statamic\Tags\Tags;

class DocDescendants extends Tags
{
    public static $handle = 'doc_descendants';

    /**
     * Returns all descendants of the current docs entry as a flat list,
     * each augmented with a `nest_depth` value (2 = child, 3 = grandchild).
     *
     * Prefix matching requires a space after the number ("8 " or "8.2 ") so
     * ordinal-format video entries like "8. osion video" are NOT treated as
     * parent sections (they return [] when loaded as a page).
     *
     * Ordinal entries ("N. Something") appearing as children of another section
     * are detected separately and given nest_depth = 2, sorted after numbered
     * subsections so they appear at the end of the section.
     */
    public function index()
    {
        $entry = $this->context->value('page');
        if (! $entry) {
            return [];
        }

        $title = (string) $entry->value('title');

        // Require whitespace after the numeric prefix so "2. osion video"
        // (ordinal format) does NOT match and returns [] — preventing it from
        // pulling in all of section 2's subsections as its own descendants.
        if (! preg_match('/^(\d+(?:\.\d+)*)\s/', $title, $m)) {
            return [];
        }

        $prefix = $m[1] . '.';
        $locale = $entry->locale();

        $descendants = Entry::query()
            ->where('collection', 'docs')
            ->where('site', $locale)
            ->get()
            ->filter(fn ($e) => str_starts_with((string) $e->value('title'), $prefix))
            ->sortBy(function ($e) {
                $t = (string) $e->value('title');
                // "N. Something" (ordinal video entries) sort after numbered subsections
                // by substituting a high pseudo-number so natural sort places them last.
                return preg_replace('/^(\d+)\.\s/', '$1.9999 ', $t);
            }, SORT_NATURAL)
            ->map(function ($e) {
                $t = (string) $e->value('title');

                if (preg_match('/^(\d+(?:\.\d+)*)\s/', $t, $m)) {
                    // "8.2 Foo" → 2, "8.2.1 Foo" → 3
                    $depth = substr_count($m[1], '.') + 1;
                } elseif (preg_match('/^\d+\.\s/', $t)) {
                    // "8. osion video" — ordinal format, child of section 8
                    $depth = 2;
                } else {
                    $depth = 1;
                }

                $data = $e->toAugmentedArray();
                $data['nest_depth'] = $depth;

                return $data;
            })
            ->values()
            ->all();

        return $descendants;
    }
}

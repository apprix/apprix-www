<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\Facades\Entry;

class DocsSearchController extends Controller
{
    public function index(Request $request)
    {
        $site = $request->input('site', 'default');

        $entries = Entry::query()
            ->where('collection', 'docs')
            ->where('site', $site)
            ->get();

        // Build a map of top-level section number → URL for quick lookup.
        // Subsection entries link to their parent page + anchor so the full
        // section context loads (siblings visible, sidebar works, hash scroll fires).
        $parentUrls = [];
        foreach ($entries as $entry) {
            $t = (string) $entry->value('title');
            if ($this->detectDepth($t) === 1 && preg_match('/^(\d+)\s/', $t, $m)) {
                $parentUrls[$m[1]] = (string) $entry->url();
            }
        }

        $items = $entries->map(function ($entry) use ($parentUrls) {
            $title = (string) $entry->value('title');
            $rawContent = $entry->get('content');

            if (is_array($rawContent)) {
                $body = $this->extractTextFromProseMirror($rawContent);
            } else {
                $body = strip_tags((string) ($rawContent ?? ''));
            }

            $body = preg_replace('/\s+/', ' ', trim($body));
            $depth = $this->detectDepth($title);

            // For depth-2/3 entries point to parent section page + anchor.
            $url = (string) $entry->url();
            if ($depth > 1 && preg_match('/^(\d+)/', $title, $m) && isset($parentUrls[$m[1]])) {
                $url = $parentUrls[$m[1]] . '#' . $entry->slug();
            }

            return [
                'url'   => $url,
                'title' => $title,
                'body'  => mb_substr($body, 0, 500),
                'depth' => $depth,
            ];
        })->filter(fn ($item) => !empty($item['url']) && !empty($item['title']))->values();

        return response()->json($items)
            ->header('Cache-Control', 'public, max-age=1800');
    }

    private function detectDepth(string $title): int
    {
        if (preg_match('/^(\d+(?:\.\d+)*)\s/', $title, $m)) {
            return substr_count($m[1], '.') + 1;
        }
        if (preg_match('/^\d+\.\s/', $title)) {
            return 2;
        }
        return 1;
    }

    private function extractTextFromProseMirror(array $nodes): string
    {
        $text = '';
        foreach ($nodes as $node) {
            if (! is_array($node)) {
                continue;
            }
            if (($node['type'] ?? '') === 'set') {
                continue;
            }
            if (($node['type'] ?? '') === 'text') {
                $text .= $node['text'] ?? '';
            }
            if (isset($node['content']) && is_array($node['content'])) {
                $text .= ' ' . $this->extractTextFromProseMirror($node['content']);
            }
        }
        return $text;
    }
}

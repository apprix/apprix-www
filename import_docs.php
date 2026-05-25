<?php
/**
 * import_docs.php
 *
 * Imports Builder Help FI + EN from WordPress XML export into Statamic docs collection.
 * Run from the project root: php import_docs.php
 */

// ─── CONFIG ────────────────────────────────────────────────────────────────
const XML_FILE = 'C:/Users/tomih/Downloads/apprixoy.WordPress.2026-04-27.xml';
const DOCS_FI  = __DIR__ . '/content/collections/docs/default/';
const DOCS_EN  = __DIR__ . '/content/collections/docs/en/';
const TREE_FI  = __DIR__ . '/content/trees/collections/default/docs.yaml';
const TREE_EN  = __DIR__ . '/content/trees/collections/en/docs.yaml';
const PAGE_FI  = 'Builder Help FI';
const PAGE_EN  = 'Builder Help EN';

// ─── HELPERS ───────────────────────────────────────────────────────────────

function uuid(): string {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}

function slugify(string $text): string {
    $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
    $text = mb_strtolower($text, 'UTF-8');
    $text = strtr($text, [
        'ä' => 'a', 'ö' => 'o', 'å' => 'a', 'ü' => 'u',
        'é' => 'e', 'è' => 'e', 'ê' => 'e', 'ñ' => 'n',
        '&' => 'and', '°' => '',
    ]);
    $text = preg_replace('/[^a-z0-9\s\-]/', '', $text);
    $text = preg_replace('/[\s\-]+/', '-', trim($text));
    return substr($text, 0, 80);
}

/**
 * Extract section number from admin_label.
 * "2.2.1 Title"        → "2.2.1"
 * "2. osion video"     → "2.v"   (video child of section 2)
 * "3 Section, Video 1" → "3.v1"
 * "3 Section, Video 2" → "3.v2"
 */
function sectionNumber(string $label): ?string {
    // Standard numbered: "2.2.1 Something"
    if (preg_match('/^(\d+(?:\.\d+)*)\s+(?!\s*osion\s*video|\s*Section,?\s*Video)/i', $label, $m)) {
        return $m[1];
    }
    // Finnish video: "2. osion video", "3. osion video 1", "3. osion video 2"
    if (preg_match('/^(\d+)\.\s*osion\s*video\s*(\d*)/i', $label, $m)) {
        $n = $m[1];
        $v = $m[2] ?: '1';
        return "{$n}.v{$v}";
    }
    // English video: "3 Section, Video 1", "4 Section, Video"
    if (preg_match('/^(\d+)\s+Section,?\s+Video\s*(\d*)/i', $label, $m)) {
        $n = $m[1];
        $v = $m[2] ?: '1';
        return "{$n}.v{$v}";
    }
    return null;
}

function parentNumber(string $number): ?string {
    // "2.v1" → "2", "3.v2" → "3"
    if (preg_match('/^(\d+)\.v/', $number, $m)) return $m[1];
    // "2.2.1" → "2.2", "2" → null
    $parts = explode('.', $number);
    if (count($parts) <= 1) return null;
    array_pop($parts);
    return implode('.', $parts);
}

function extractContent(string $containerHtml): string {
    $parts = [];

    // 1. fusion_text → clean HTML
    if (preg_match_all('/\[fusion_text[^\]]*\](.*?)\[\/fusion_text\]/s', $containerHtml, $m)) {
        foreach ($m[1] as $block) {
            $block = trim($block);
            if (strlen($block) > 5) $parts[] = $block;
        }
    }

    // 2. fusion_vimeo → iframe embed
    if (preg_match_all('/\[fusion_vimeo\s+id="([^"]+)"[^\]]*\/?]/s', $containerHtml, $m)) {
        foreach ($m[1] as $id) {
            if (preg_match('/(\d{5,})/', $id, $vid)) {
                $parts[] = '<div class="video-embed"><iframe src="https://player.vimeo.com/video/' . $vid[1] . '" width="640" height="360" frameborder="0" allowfullscreen allow="autoplay; fullscreen"></iframe></div>';
            }
        }
    }

    // 3. fusion_imageframe → img tag (keep original URL for now)
    if (preg_match_all('/\[fusion_imageframe[^\]]*\](https?:\/\/[^\[]+)\[\/fusion_imageframe\]/s', $containerHtml, $m)) {
        foreach ($m[1] as $url) {
            $url = trim($url);
            if (!empty($url)) {
                $parts[] = '<figure class="doc-image"><img src="' . htmlspecialchars($url) . '" alt="" loading="lazy"></figure>';
            }
        }
    }

    return implode("\n\n", $parts);
}

function cleanHtml(string $html): string {
    // Remove inline styles
    $html = preg_replace('/ style="[^"]*"/i', '', $html);
    // Remove color spans but keep content
    $html = preg_replace('/<span[^>]*>/', '<span>', $html);
    $html = preg_replace('/<span>(.*?)<\/span>/s', '$1', $html);
    // Remove PDF layout wrappers (common in EN content copied from PDF)
    $html = preg_replace('/<div[^>]*class="(?:page|layoutArea|column|section)"[^>]*>/i', '', $html);
    $html = preg_replace('/<\/div\s*>/i', '', $html);
    // Decode HTML entities in text
    $html = str_replace('&nbsp;', ' ', $html);
    // Clean up excessive whitespace
    $html = preg_replace('/[ \t]{2,}/', ' ', $html);
    $html = preg_replace('/\n{3,}/', "\n\n", $html);
    return trim($html);
}

// ─── LOAD XML ──────────────────────────────────────────────────────────────

echo "Loading XML export...\n";
libxml_use_internal_errors(true);
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->load(XML_FILE);
$xpath = new DOMXPath($dom);
$xpath->registerNamespace('content', 'http://purl.org/rss/1.0/modules/content/');
$xpath->registerNamespace('wp', 'http://wordpress.org/export/1.2/');

function getPageContent(DOMXPath $xpath, string $title): ?string {
    $items = $xpath->query('//item');
    foreach ($items as $item) {
        $t      = $xpath->query('title', $item)->item(0)?->nodeValue ?? '';
        $type   = $xpath->query('wp:post_type', $item)->item(0)?->nodeValue ?? '';
        $status = $xpath->query('wp:status', $item)->item(0)?->nodeValue ?? '';
        if ($t === $title && $type === 'page' && $status === 'publish') {
            return $xpath->query('content:encoded', $item)->item(0)?->nodeValue;
        }
    }
    return null;
}

echo "Finding " . PAGE_FI . "...\n";
$rawFi = getPageContent($xpath, PAGE_FI);
echo "Finding " . PAGE_EN . "...\n";
$rawEn = getPageContent($xpath, PAGE_EN);

if (!$rawFi) die("ERROR: Could not find '" . PAGE_FI . "'\n");
if (!$rawEn) die("ERROR: Could not find '" . PAGE_EN . "'\n");

// ─── EXTRACT CONTAINERS ────────────────────────────────────────────────────

echo "Extracting containers...\n";

function extractContainers(string $raw): array {
    $containers = [];
    preg_match_all('/\[fusion_builder_container([^\]]*)\](.*?)\[\/fusion_builder_container\]/s', $raw, $m, PREG_SET_ORDER);
    foreach ($m as $match) {
        $label = '';
        if (preg_match('/admin_label="([^"]*)"/', $match[1], $lm)) {
            $label = html_entity_decode(trim($lm[1]), ENT_QUOTES, 'UTF-8');
        }
        $containers[] = ['label' => $label, 'html' => $match[2]];
    }
    return $containers;
}

$containersFi = extractContainers($rawFi);
$containersEn = extractContainers($rawEn);

echo "  FI containers: " . count($containersFi) . "\n";
echo "  EN containers: " . count($containersEn) . "\n";

// ─── PROCESS SECTIONS ──────────────────────────────────────────────────────

echo "Processing sections...\n";

$sections = [];

// Process Finnish (skip first container = nav section)
foreach ($containersFi as $i => $c) {
    if ($i === 0) continue; // skip nav/header container
    $label = $c['label'];
    if (empty($label)) continue;

    $num = sectionNumber($label);
    if ($num === null) {
        echo "  SKIP (no number): {$label}\n";
        continue;
    }

    $html = cleanHtml(extractContent($c['html']));

    $sections[$num] = [
        'number'     => $num,
        'title_fi'   => $label,
        'title_en'   => '',
        'content_fi' => $html,
        'content_en' => '',
        'id'         => uuid(),
        'slug'       => '',
    ];
}

// Match English containers (skip first)
foreach ($containersEn as $i => $c) {
    if ($i === 0) continue;
    $label = $c['label'];
    if (empty($label)) continue;

    $num = sectionNumber($label);
    if ($num === null) continue;

    if (isset($sections[$num])) {
        $sections[$num]['title_en']   = $label;
        $sections[$num]['content_en'] = cleanHtml(extractContent($c['html']));
    }
}

// Generate slugs (ensure uniqueness)
$usedSlugs = [];
foreach ($sections as $num => &$s) {
    $base = slugify($s['title_fi']);
    $slug = $base;
    $n    = 2;
    while (isset($usedSlugs[$slug])) {
        $slug = $base . '-' . $n++;
    }
    $usedSlugs[$slug] = true;
    $s['slug'] = $slug;
}
unset($s);

echo "  Sections to import: " . count($sections) . "\n";

// ─── WRITE ENTRY FILES ─────────────────────────────────────────────────────

echo "Writing entry files...\n";

// Clear existing docs entries
foreach (glob(DOCS_FI . '*.md') as $f) unlink($f);
foreach (glob(DOCS_EN . '*.md') as $f) unlink($f);

foreach ($sections as $section) {
    $id       = $section['id'];
    $slug     = $section['slug'];

    // ── Finnish entry ──
    $titleFi = str_replace("'", "''", $section['title_fi']);
    $fiFront = "---\nid: {$id}\nblueprint: doc\ntitle: '{$titleFi}'\n---\n";
    file_put_contents(DOCS_FI . $slug . '.md', $fiFront . $section['content_fi']);

    // ── English entry (same ID = same entry, different locale) ──
    $titleEn = $section['title_en'] ?: $section['title_fi'];
    $titleEn = str_replace("'", "''", $titleEn);
    $enContent = $section['content_en'] ?: $section['content_fi'];
    $enFront = "---\nid: {$id}\nblueprint: doc\ntitle: '{$titleEn}'\n---\n";
    file_put_contents(DOCS_EN . $slug . '.md', $enFront . $enContent);
}

// ─── BUILD TREE ────────────────────────────────────────────────────────────

echo "Building navigation tree...\n";

// Sort sections by section number
uksort($sections, function ($a, $b) {
    // Normalise: replace .vN with .999N for sorting
    $norm = fn($s) => preg_replace_callback('/\.v(\d*)/', fn($m) => '.' . (900 + (int)($m[1] ?: 1)), $s);
    $aParts = array_map('floatval', explode('.', $norm($a)));
    $bParts = array_map('floatval', explode('.', $norm($b)));
    $len = max(count($aParts), count($bParts));
    for ($i = 0; $i < $len; $i++) {
        $diff = ($aParts[$i] ?? 0) <=> ($bParts[$i] ?? 0);
        if ($diff !== 0) return $diff;
    }
    return 0;
});

// Build tree nodes (using references for parent-child linking)
$nodes = [];
foreach ($sections as $num => $s) {
    $nodes[$num] = ['entry' => $s['id'], 'children' => [], 'num' => $num];
}

$roots = [];
foreach ($nodes as $num => &$node) {
    $parent = parentNumber($num);
    if ($parent !== null && isset($nodes[$parent])) {
        $nodes[$parent]['children'][] = &$node;
    } else {
        $roots[] = &$node;
    }
}
unset($node);

function renderTree(array $nodes, int $depth = 0): string {
    $yaml = '';
    $pad  = str_repeat('  ', $depth);
    foreach ($nodes as $node) {
        $yaml .= "{$pad}-\n{$pad}  entry: {$node['entry']}\n";
        if (!empty($node['children'])) {
            $yaml .= "{$pad}  children:\n";
            $yaml .= renderTree($node['children'], $depth + 2);
        }
    }
    return $yaml;
}

$treeYaml = "tree:\n" . renderTree($roots);
file_put_contents(TREE_FI, $treeYaml);
file_put_contents(TREE_EN, $treeYaml);

// ─── SUMMARY ───────────────────────────────────────────────────────────────

$fiBefore = count(glob(DOCS_FI . '*.md'));
$enCount  = count(glob(DOCS_EN . '*.md'));

echo "\n✓ Import complete!\n";
echo "  FI entries written : {$fiBefore}\n";
echo "  EN entries written : {$enCount}\n";
echo "  Tree depth levels  : up to 3\n";
echo "\nNext: clear Statamic Content Stache in the CP, then visit /help\n";

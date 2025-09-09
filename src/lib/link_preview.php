<?php
// Simple link preview helper to extract an image URL from a page
// Prefers Open Graph (og:image), then Twitter Card, then rel image_src

function lp_http_get(string $url, int $timeout = 4): string|false {
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => $timeout,
            'header' => [
                'User-Agent: Mozilla/5.0 (compatible; LinkPreviewBot/1.0; +https://example.com)'
            ]
        ],
        'https' => [
            'method' => 'GET',
            'timeout' => $timeout,
            'header' => [
                'User-Agent: Mozilla/5.0 (compatible; LinkPreviewBot/1.0; +https://example.com)'
            ]
        ],
    ]);
    return @file_get_contents($url, false, $context);
}

function lp_is_absolute_url(string $url): bool {
    return (bool)preg_match('#^https?://#i', $url) || str_starts_with($url, '//');
}

function lp_resolve_url(string $base, string $relative): string {
    if ($relative === '' ) return $base;
    if (lp_is_absolute_url($relative)) return $relative;

    // Build from base
    $parts = parse_url($base);
    if (!$parts || empty($parts['scheme']) || empty($parts['host'])) return $relative;
    $scheme = $parts['scheme'];
    $host = $parts['host'];
    $port = isset($parts['port']) ? ':' . $parts['port'] : '';
    $path = $parts['path'] ?? '/';

    // If relative starts with '/', it's root-relative
    if (str_starts_with($relative, '/')) {
        return "$scheme://$host$port$relative";
    }

    // Directory of the base
    $dir = rtrim(substr($path, 0, strrpos($path, '/') !== false ? strrpos($path, '/') + 1 : 0), '/');
    $dir = $dir === '' ? '/' : $dir . '/';

    $full = "$scheme://$host$port$dir$relative";

    // Normalize ./ and ../ segments
    $segments = [];
    foreach (explode('/', parse_url($full, PHP_URL_PATH) ?? '') as $seg) {
        if ($seg === '' || $seg === '.') continue;
        if ($seg === '..') { array_pop($segments); continue; }
        $segments[] = $seg;
    }
    $normalizedPath = '/' . implode('/', $segments);
    return "$scheme://$host$port$normalizedPath";
}

function link_preview_image(string $url): ?string {
    $html = lp_http_get($url);
    if ($html === false || trim($html) === '') return null;

    // Use DOMDocument for robust parsing
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    if (!$dom->loadHTML($html)) {
        libxml_clear_errors();
        return null;
    }
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    // Prefer og:image
    $nodes = $xpath->query('//meta[@property="og:image" or @name="og:image"]/@content');
    if ($nodes && $nodes->length > 0) {
        $img = trim($nodes->item(0)->nodeValue);
        if ($img !== '') return lp_is_absolute_url($img) ? $img : lp_resolve_url($url, $img);
    }

    // Fallback: twitter image
    $nodes = $xpath->query('//meta[@name="twitter:image" or @property="twitter:image"]/@content');
    if ($nodes && $nodes->length > 0) {
        $img = trim($nodes->item(0)->nodeValue);
        if ($img !== '') return lp_is_absolute_url($img) ? $img : lp_resolve_url($url, $img);
    }

    // Fallback: link rel image_src
    $nodes = $xpath->query('//link[@rel="image_src"]/@href');
    if ($nodes && $nodes->length > 0) {
        $img = trim($nodes->item(0)->nodeValue);
        if ($img !== '') return lp_is_absolute_url($img) ? $img : lp_resolve_url($url, $img);
    }

    // No image found
    return null;
}


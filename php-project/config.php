<?php
// Simple project config: base asset path and helpers
$ASSET_PATH = '/assets';

function asset_path(string $relative): string {
    global $ASSET_PATH;
    return rtrim($ASSET_PATH, '/') . '/' . ltrim($relative, '/');
}

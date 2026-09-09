<?php

namespace contacts\webapp\assets;

use webcraftdg\framework\web\AssetBundle;

class AppAsset extends AssetBundle
{

    public string $basePath;
    public string $sourcePath;

    public array $js = [
        'manifest',
        'main'
    ];

    public array $css = [
        'main'
    ];
}
<?php

namespace contacts\webapp\assets;

use webcraftdg\framework\web\AssetBundle;
use webcraftdg\framework\web\View;

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

    public array $jsOptions = [
        'pos' => View::POS_BODY_END
    ];
}
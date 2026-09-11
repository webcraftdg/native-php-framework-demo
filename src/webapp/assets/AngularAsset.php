<?php

namespace contacts\webapp\assets;

use webcraftdg\framework\web\AssetBundle;
use webcraftdg\framework\web\AssetSource;
use webcraftdg\framework\web\View;

class AngularAsset extends AssetBundle
{

    public string $basePath;
    public string $sourcePath;
    public string $strategy = AssetSource::STRATEGY_PATTERN;


    public function init()
    {
        $this->sourcePath = dirname(__DIR__, 3).\DIRECTORY_SEPARATOR.'frontend'.DIRECTORY_SEPARATOR.'dist'.DIRECTORY_SEPARATOR.'frontend'.DIRECTORY_SEPARATOR.'browser';
        parent::init();
    }
   
    public array $js = [
        'main',
    ];

    public array $css = [
        'styles',
    ];

    public array $jsOptions = [
        'type' => 'module',
        'pos' => View::POS_BODY_END,
    ];
}
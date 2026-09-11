<?php
/**
 * 
 */
require_once __DIR__ . '../../../vendor/autoload.php';
require_once __DIR__.'../../config/bootstrap.php';
$config = require_once __DIR__.'../../config/config.php';
use webcraftdg\framework\Application;
$app = new Application(type:Application::APPLICATION_TYPE_WEB, config:$config);
$app->run();

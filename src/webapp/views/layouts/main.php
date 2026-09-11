<?php
/**
 * main.php
 *
 * PHP Version 8.2+
 *
 * @version XXX
 * @package webapp\views\layouts
 *
 * @var use webcraftdg\framework\web\View $this
 * @var string $content
 */

use contacts\webapp\assets\AngularAsset;
use webcraftdg\framework\App;
use webcraftdg\framework\web\Html;
use contacts\webapp\assets\AppAsset;
$class = 'wrapper';
AppAsset::register($this);
AngularAsset::register($this);
?>
    <!DOCTYPE html>
    <?php echo Html::beginTag('html', ['lang' => App::$app->language]); ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            <?php echo App::$app->name; ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php 
            echo $this->metaTag(['name' => 'X-Version', 'content' => '1.0.0']);
            echo $this->head();
        ?>
    </head>
<?php echo Html::beginTag('body', ['class' => '']); ?>
<?php
echo $this->startPageBody();
echo $content;
echo $this->endPageBody();
?>
<?php echo Html::endTag('body'); ?>
<?php echo Html::endTag('html');
?>
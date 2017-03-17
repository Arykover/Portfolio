<?php

date_default_timezone_set('Europe/Paris');
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__.'/controleurs/controleurGeneral.php';
require_once __DIR__.'/routes.php';
$app['debug'] = true;
$app->run();
ob_start();
?>
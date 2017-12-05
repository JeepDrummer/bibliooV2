<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 04/12/2017
 * Time: 15:57
 */
require_once __DIR__.'/../vendor/autoload.php';

$app = new \Silex\Application();

require __DIR__.'/../app/config/dev.php';
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';
require __DIR__.'/../src/BibliooBundle/BDD/BookBDD.php';
$app->run();
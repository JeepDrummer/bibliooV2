<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 04/12/2017
 * Time: 16:51
 */

// ---- Router ----- //

// Home Page
$app->get('/', function () use ($app) {
    $book = $app['bdd.book']->findAll();
    ob_start();
    require '../src/BibliooBundle/Views/home.php';
    $view = ob_get_clean();
    return $view;
});
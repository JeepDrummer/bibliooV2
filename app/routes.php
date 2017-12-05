<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 04/12/2017
 * Time: 16:51
 */

// ---- Router ----- //

//public routes
// Home Page - last books and most popular books
$app->get('/', function () use ($app) {
    $book = $app['bdd.book']->findAll();
    ob_start();
    require '../src/BibliooBundle/Views/home.php';
    $view = ob_get_clean();
    return $view;
});

//list of all books
$app->get('/list', function () use ($app) {
    $book = $app['bdd.book']->findAll();
    ob_start();
    require '../src/BibliooBundle/Views/list.php';
    $view = ob_get_clean();
    return $view;
});

//Administration routes
//reservation dashboard
$app->get('/dashboard', function () use ($app) {
    $book = $app['bdd.book']->findAll();
    ob_start();
    require '../src/AdminBundle/Views/dashboard.php';
    $view = ob_get_clean();
    return $view;
});

//add training form
$app->get('/add_training', function () use ($app) {
    $book = $app['bdd.training']->findAll();
    ob_start();
    require '../src/AdminBundle/Views/addtraining.php';
    $view = ob_get_clean();
    return $view;
});



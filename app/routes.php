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
    //$book = $app['bdd.book']->findAll();
    ob_start();
    require '../src/BibliooBundle/Views/home.php';
    $view = ob_get_clean();
    return $view;
});

//list of all books
$app->get('/list', function () use ($app) {
    //$book = $app['bdd.book']->findAll();
    ob_start();
    require '../src/BibliooBundle/Views/list.php';
    $view = ob_get_clean();
    return $view;
});

//list of all books
$app->get('/ml', function () use ($app) {
    //$book = $app['bdd.book']->findAll();
    ob_start();
    require '../src/BibliooBundle/Views/ml.php';
    $view = ob_get_clean();
    return $view;
});

//list of all books
$app->get('/resbook', function () use ($app) {
    //$book = $app['bdd.book']->findAll();
    ob_start();
    require '../src/BibliooBundle/Views/resbook.php';
    $view = ob_get_clean();
    return $view;
});

//Administration routes
//reservation dashboard
$app->get('/dashboard', function () use ($app) {
    //$book = $app['bdd.book']->findAll();
    ob_start();
    require '../src/AdminBundle/Views/dashboard.php';
    $view = ob_get_clean();
    return $view;
});

//trainings form
$app->get('/training', function () use ($app) {
    //$book = $app['bdd.training']->findAll();
    ob_start();
    require '../src/AdminBundle/Views/training.php';
    $view = ob_get_clean();
    return $view;
});

//users form
$app->get('/users', function () use ($app) {
    //$book = $app['bdd.training']->findAll();
    ob_start();
    require '../src/AdminBundle/Views/users.php';
    $view = ob_get_clean();
    return $view;
});

//new book form
$app->get('/newbook', function () use ($app) {
    //$book = $app['bdd.training']->findAll();
    ob_start();
    require '../src/AdminBundle/Views/newbook.php';
    $view = ob_get_clean();
    return $view;
});

//login form
$app->get('/login', function () use ($app) {
    //$book = $app['bdd.training']->findAll();
    ob_start();
    require '../src/BibliooBundle/Views/login.php';
    $view = ob_get_clean();
    return $view;
});



<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 04/12/2017
 * Time: 16:51
 */

use BibliooBundle\BDD\BookBDD;
use BibliooBundle\BDD\CategoryBDD;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

ErrorHandler::register();
ExceptionHandler::register();

$app->register(new \Silex\Provider\DoctrineServiceProvider());

// ----- Services register ----- //
$app['bdd.book'] = function ($app){
    return new BookBDD($app['db']);
};

$app['bdd.training'] = function ($app){
    return new \BibliooBundle\BDD\TrainingBDD($app['db']);
};

<?php
require 'vendor/autoload.php';
// $app = new \Slim\Slim;
use \Slim\App;

$app = new App();


$app->get('/', function () {
    echo "Hai";
});

$app->get('/kelompok', function () {
    echo "Mari Belajar Slim";
});

$app->run();

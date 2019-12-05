<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('lowLatency', function () use ($router) {
    $hostName = gethostname();
    $lowLatency = 0;
    for ($i=0; $i < 1000 ; $i++) { 
        $lowLatency = $lowLatency + $i;
    }
    return  $hostName . '<br>' . $lowLatency;
});


$router->get('highLatency', function () use ($router) {
    $hostName = gethostname();

    $highLatency = 0;
    for ($i=0; $i < 1000 ; $i++) { 
        $highLatency = $highLatency + $i;
        for ($k=0; $k < $i ; $k++) { 
            $highLatency = $highLatency + $k;
        }
    }
    return  $hostName . '<br>' . $highLatency;
});

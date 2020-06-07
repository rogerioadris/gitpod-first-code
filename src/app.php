<?php

/*
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 */

use Silex\Application;

$app = new Application();

$app->get('/', function() use($app) {
    return $app->json(array('message' => 'Hello World'));
});

$app->get('/hello/{name}', function($name) use($app) {
    return $app->json([
        'message' => 'Hello '.$app->escape($name)
    ]);
});

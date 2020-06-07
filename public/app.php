<?php

/*
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 */

use Silex\Application;

$app = new Application();

$app->get('/hello/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});

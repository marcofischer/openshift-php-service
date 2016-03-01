<?php

require "vendor/autoload.php";

$app = new Silex\Application();

$app->get('/', function() use($app) {
    return 'Running Build ' . getenv('OPENSHIFT_BUILD_NAME');
});

$app->get('/data', function() use($app) {
    return json_encode(['data' => 'xxxx']);
});

$app->run();
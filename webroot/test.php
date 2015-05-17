<?php
/**
* Frontcontroller
* Testing message system.
*/
require __DIR__.'/config.php';

// Create services and inject into the app. 
$di  = new \Anax\DI\CDIFactoryDefault();
$app = new \Anax\Kernel\CAnax($di);

$app->router->add('', function() use ($app) {

    $app->theme->setTitle("Flash test");

    $app->flash->message('information', 'This is a info message');
    $app->flash->message('warning', 'This is a warning message');
    $app->flash->message('success', 'This is a success message');
    $app->flash->message('error', 'This is a error message');


    $app->theme->setVariable('title', "Flash test");

    $app->views->add('me/page', [
        'content' => $app->flash->getMessage(),
    ]);
}); 

$app->theme->addStylesheet('css/flash.css'); 

$app->router->handle();
$app->theme->render();

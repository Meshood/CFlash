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

    $app->flash->message('information', 'This message is used for displaying information');
    $app->flash->message('warning', 'This message is used for displaying a warning');
    $app->flash->message('success', 'This message is used for displaying success');
    $app->flash->message('error', 'This message is used for displaying an error');


    $app->theme->setVariable('title', "Flash test");

    $app->views->add('me/page', [
        'content' => $app->flash->getMessage(),
    ]);
}); 

$app->theme->addStylesheet('css/flash.css'); 

$app->router->handle();
$app->theme->render();

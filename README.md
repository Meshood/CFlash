CFlash a PHP class for creating and render a message on a website or webapplication built with Anax-MVC.
==================================

[![Build Status](https://travis-ci.org/Meshood/CFlash.svg?branch=master)](https://travis-ci.org/Meshood/CFlash)

License
----------------------------------

This software is free software and carries a MIT license.

Installation
----------------------------------

You will need a version of Anax-MVC for this module to work.
Use Composer to download the module from Packagist into your Anax-MVC framework.

Once downloaded you will need to make it a service in the framework. You can do this in two ways.

1. Put the following code in your CDIFactoryDefault file or if you have made your own, then use that one.
2. Or you can take the same code but replace "$this->" with "$di->" and put it in your front controller.

```
$this->setShared('flash', function ()
{
    $flash = new \meshood\Flash\CFlash();
    return $flash;
});
```

You can now use the module like this.

```
$app->flash->message('information', 'This message is used for displaying information');
$app->flash->message('warning', 'This message is used for displaying a warning');
$app->flash->message('success', 'This message is used for displaying success');
$app->flash->message('error', 'This message is used for displaying an error');
```

Then use this code to get the html for the message(s).

```
$app->flash->getMessage(),
```

If your want to test so the module works just copy the test.php file from the webroot in the module to your Anax-MVC webroot and
point your browser to it.

And if you want basic styling you can copy the flash.css file from the module and put it in the css folder in Anax-MVC webroot.

History
----------------------------------

v0.8.1 (2015-05-17)

* Fixed missing documentation.

v0.8 (2015-05-17)

* Now using namespace meshood\Flash.
* Added history documentation.
* Added install documentation.
* Removed unnecessary files.

v0.1.1 (2015-05-17)

* Fixed missing code in test.php.
* Now using namespace Meshood\Flash.

v0.1 (2015-05-17)

* Initial commit.
* Working class.
* Not working woth Packagist.
* Missing documentation.
* Working css to go with the class.

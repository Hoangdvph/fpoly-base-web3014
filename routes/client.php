<?php

use Dellpc\PhpOop\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');
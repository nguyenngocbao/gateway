<?php

/**
 * @author Steve
 */

require __DIR__ . '/../vendor/autoload.php';

define('APP_PATH', __DIR__ . '/../app/');

require APP_PATH . '/helper/functions.php';

App\Bootstrap::run();

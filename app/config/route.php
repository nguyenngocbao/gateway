<?php

/**
 * @author Bao
 */


use App\Controllers\IndexController;
use App\Controllers\PlatformForwardController;

use App\Controllers\main\NFCController;
use App\Controllers\main\NFCTypeController;
use App\Controllers\main\PlatformController;

use App\Controllers\menu\TemplateController;
use App\Controllers\menu\StoreController;


define('GET', 'GET');
define('POST', 'POST');

return [
    [GET, '/[*:uuid]', [IndexController::class, 'index']],
];

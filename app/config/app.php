<?php

/**
 * @author Bao
 */
return [
    'debug' => true,
    'sub_domain'  => "",
    'view_static' => "",
    'version' => '1.0.0',
    'path_log'  => realpath(__DIR__ . '/../../') . '/logs/' . date('Y-m-d') . '.log',
    'path_view' => realpath(__DIR__ . '/../../') . '/app/views/',

    'profile_time_log' => 26,
    'api' => [
        'url' => 'http://localhost:8778',
        'callee' => 'gateway',
        'key' => 'dev',
    ],
    'url' => [
        'err' => 'http://localhost:8000'
    ]


];

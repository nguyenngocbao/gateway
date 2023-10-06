<?php

namespace App\Controllers;

class IndexController
{
    public static function indexAction($uuid){
        $res = call_api('/gateway', ['uuid' => $uuid]);
        if ($res['err'] ==1 ){
            redirect(config("url.err"));
        }
        redirect($res["data"]);
    }
}

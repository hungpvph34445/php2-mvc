<?php

namespace Hung\OopMvc\Commons;

class Helper
{
    public static function debug($data) {
        echo '<pre>';

        print_r($data);

        die;
    }
    // public static function asset($path){
    //     return $_ENV['BASE_URL'] . $path ;
    // }
}

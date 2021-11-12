<?php

namespace app\utils;

class view{

    /**
     * @param string
     * @return string
     */

    private static function getcontentview($view){

        $file = __DIR__.'/../../resources/view/' .$view. '.html';
        return file_exists($file) ? file_get_contents($file) :'';

    }

    public static function render($view, $var = []){

        $contentview = self::getcontentview($view);
        $keys = array_keys($var);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);
        return str_replace($keys, array_values($var),$contentview);
    }

}
<?php

namespace app\controller\pages;
use \app\utils\view;

class pages{

    private static function getheader(){

        return view::render('pages/header');
    }

    private static function getfooter(){

        return view::render('pages/footer');
    }
 
    public static function getpage($title, $content){

        return view::render('pages/page', 
        ['title'=> $title,
        'header'=> self::getheader(),
        'footer'=> self::getfooter(),
        'content'=> $content]);

    }
}
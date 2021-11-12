<?php

namespace app\controller\pages;
use app\utils\view;
use app\model\entity\organization;

class home extends pages{

    /**
     * @return string
     */
 
    public static function gethome(){

        $org = new organization;

        $title = 'developer';
        $content = view::render('pages/home', $arrays = array("name"=> $org->name, "description"=> $org->description));
        return parent::getpage($title, $content);
    }
}
<?php
/**
 * 
 */
require __DIR__ .'/vendor/autoload.php';
use app\controller\pages\home;
use app\http\response;
use app\http\router;

define('URL', 'http://localhost/mvc');

$pq = new router(URL);

$pq->get('/',[
    function(){
        return new response(200, home::gethome());
    }]);
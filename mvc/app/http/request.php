<?php

namespace app\http;

class request{

    private $httpmethod;
    private $uri;
    private $queryparams = [];
    private $postvars = [];
    private $headers = [];
    public function __construct(){

        $this->queryparams = $_GET ?? [];
        $this->postvars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpmethod = $_SERVER ['REQUEST_METHOD'];
        $this->uri = $_SERVER ['REQUEST_URI'];

    }
    public  function gethttpmethod(){

        return $this->httpmethod;
    }
    public function geturi(){

        return $this->uri;
    }
    public function getqueryparams(){

        return $this->queryparams;
    }
    public function getpostvars(){

        return $this->postvars;
    }
    public function getheaders(){

        return $this->headers;
    }


}
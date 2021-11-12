<?php

namespace app\http;

class response{

    private $httpcod = 200;
    private $headers = [];
    private $contenttype = 'text/html';
    private $content;

    public function __construct($httpcod, $contenttype = 'text/html', $content){

        $this->httpcod = $httpcod;
        $this->content = $content;
        $this->setcontenttype = $contenttype;
              
    }

    public function setcontenttype($contenttype){

        $this->contenttype = $contenttype;
        $this->addheader('content-type', $contenttype);

    }

    public function addheader($keys, $values){

        $this->headers[$keys] = $values;

    }

    private function sendheaders(){
        
        http_response_code($this->httpcod());
        foreach ($this->headers as $keys => $values) {
            header($keys . ':', $values . ':');
            
        }
    }

    public function sendresponse(){

        $this->sendheaders();

        switch ($this->contenttype) {
            case 'text/html':
                echo $this->content;
                exit;
            }
    }
}
<?php

class App{
    protected $url = '';
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct()
    {
        $this->url = $this->parseURL();
        
        $this->setController();
    }
    
    private function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
    
    private function setController()
    {
        if(isset($this->url[0])){
            if(file_exists("../app/controller/". $this->url[0] . ".php")){
                $this->controller = $this->url[0];
                unset($this->url[0]);
            }
        }
        
        require "../app/controller/". $this->controller . ".php";
        $this->controller = new $this->controller;
        
        if(isset($this->url[1])){
            if(method_exists($this->controller, $this->url[1])){
                $this->method = $this->url[1];
                unset($this->url[1]);
            }
        }
        
        
        if(!empty($this->url)){
            $this->params = array_values($this->url);
        }
        
        //jalankan controller dan method
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    
}
<?php
namespace App;

class Config{
    public function base_url(){
        return "https://sumberroda.000webhostapp.com/";
        $base_url = "http://";
        if(isset($_SERVER['HTTP_HOST'])) {
            $base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) != "off" ? "https://" : "http://";
        }
        
        $tmpURL = dirname(__FILE__);
        $tmpURL = str_replace(chr(92),'/',$tmpURL);
        $tmpURL = str_replace($_SERVER['DOCUMENT_ROOT'],'',$tmpURL);
        $tmpURL = ltrim($tmpURL, '/');
        $tmpURL = rtrim($tmpURL, '/');
        
        if(strpos($tmpURL, '/')){
            $tmpURL = explode('/', $tmpURL);
            $tmpURL = $tmpURL[0];
        }
        
        if ($tmpURL !== $_SERVER['HTTP_HOST']){
            $base_url .= "$_SERVER[HTTP_HOST]/$tmpURL/";
        }
        
        return $base_url;
    }
}
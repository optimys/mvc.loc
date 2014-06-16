<?php

class App {
    protected $controller   = 'home';
    protected $method       = 'index';
    protected $params       = array();


    public function __construct() {
        print_r( $this->spliturl() ); 
     }
    
    public function spliturl(){
        if( isset($_GET['url']) ){
            return $url = explode('/', filter_var( rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ) );
        }
    }
}
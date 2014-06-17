<?php

class App {
    protected $controller   = 'home';
    protected $method       = 'index';
    protected $params       = array();


    public function __construct() {
       $url= $this->spliturl();                                 //Сначала разрезаем URL
       
       if( file_exists("../app/controllers/".$url[0].".php" ) ){
            $this->controller = $url[0];
            unset($url[0]);                                     
       }
       else{
            unset($url[0]);
       }
/*удаляем эту переменную из массива так как после первых двух значений(0 ,1) 
дальше будут идти параметры для методов,
которые легче передавать сделав просто перестановку в массиве, т.е все что 
в массиве под индексом 2,3,4,5....станут соответсвенно под индексом 0,1,2,..*/
       require_once '../app/controllers/'.$this->controller.'.php';
       
       $this->controller = new $this->controller;
       if(isset($url[1])){                                      /*Если есть  в массиве 1-ый элемент (который отвечат за метод), то 
                                                                 проверяем соответстует ли он кокому-нибудь из методов контроллера.*/
           if(method_exists($this->controller,$url[1])){     //
                $this->method=$url[1];
                unset($url[1]);
           }
       }
       $this->params= $url ? array_values($url) : array();      /*Если в $url что-то есть то применить перестановку индексов, если она пустая то присвоет 
                                                                    пустой массив*/
       call_user_func_array(array($this->controller,$this->method),$this->params);/*Вызываем функцию, причем нам все равно было ли передано что-то в
                                                                                    GET запросе, так как у нас есть дефолтные значения, которые 
                                                                                    перепишуться если в GETE что-то было!*/
     }
    
    public function spliturl(){
        if( isset($_GET['url']) ){
            return $url = explode('/', filter_var( rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ) );
        }
    }
}
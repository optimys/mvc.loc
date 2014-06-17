<?php

class Controller {
    public function __construct() {       
    }
    
    protected function model($model){
        require_once "../app/models/$model.php";
        return new $model();
    }
    public function view($view, $data = array() ){
       require_once "../app/view/$v$view.php"; 
    }
}

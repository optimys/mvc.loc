<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Алекс
 */
class Home extends Controller{
    
    public function index($name="Stranger"){
        $user = $this->model('user');
        $user->name = $name;
        $this->view('home/index',array('name'=>$user->name, 'sername'=>$user->sername));
    }
    public function test(){
        echo ":)))";
    }
}

?>

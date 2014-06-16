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
    
    public function index($name="", $othername=""){
        echo "First param: ".$name." --and--  Second param: ".$othername ;
    }
    public function test(){
        echo ":)))";
    }
}

?>

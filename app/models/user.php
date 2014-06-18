<?php

class User extends Model
{

    public $name = "Alex";
    public $sername = "Kalashnikov";
    public $age = 29;

    public function showUserInfo()
    {
        echo "Hello!\n my name is {$this->name} and my sername is {$this->sername}";
    }

}
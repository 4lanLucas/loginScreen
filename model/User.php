<?php

class User{
    private $name;
    private $password;

    public function __construct(string $name, string $password){
        $this -> name = $name;
        $this -> password = md5($password);
    }

    public function setName(string $name){
        $this -> name = $name;
    }

    public function getName(){
        return $this -> name;
    }

    public function setPassword(string $password){
        $this -> password = md5($password);
    }
    
    public function getPassword(){
        return $this -> password;
    }
}

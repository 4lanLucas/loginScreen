<?php 

require_once("../model/User.php");


function validUser(User $entryUser) {
    $file = __DIR__ . '/users.txt';

    if(!file_exists($file)){
        return "error: database dont find";
    }

    $users = file($file);
     foreach ($users as $user){

        list($storedName,$storedPassword) = explode(',', $user);

        if($entryUser->getName() == $storedName){
            if(trim($entryUser->getPassword()) == trim($storedPassword)){
                return "user valid";
            }
        }
        
    }
    return "user invalid";
}
function addUser(User $entryUser){
    $file = __DIR__ . '/users.txt';

    if(!file_exists($file)){
        return "error: database dont find";
    }

    $users = file($file);

    foreach ($users as $user){
        list($storedName,$storedPassword) = explode(',', $user);
        if(trim($entryUser->getName()) == trim($storedName)){
            return "user already exists";
        }
    }

    if(filesize($file) == 0){
        $storeUser = "{$entryUser->getName()},{$entryUser->getPassword()}";
    } else {
        $storeUser = "\n" . "{$entryUser->getName()},{$entryUser->getPassword()}" ;
    }

    file_put_contents($file, $storeUser, FILE_APPEND);
    return "user registered successfully";
}

function removeUser(){
    
}

function updateUser(){
    
}
<?php
 
require_once('../dao/UserLogin.php');
require_once('../model/User.php');

header('Content-Type: application/json');

$name = $_POST['name'];
$password = $_POST['password'];
$type = $_POST['type'];

if($name && $password && $type == 'verify'){
    $response = "data received, ";

    $entryUser = new User($name, $password);
    $userVerifyResponse = validUser($entryUser);
    $response .= ($userVerifyResponse);

    echo json_encode($response);

} elseif(!$name  && !$password && $type == 'verify') {
    echo json_encode("error: missing data");
}

if($name && $password && $type == 'register'){
    $response = 'data received, ';

    $entryUser = new User($name, $password);
    $userRegisterResponse = addUser($entryUser);
    $response.= ($userRegisterResponse);

    echo json_encode($response);
}

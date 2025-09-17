<?php

if(!isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'home';
}

$params = explode('/',$action);



switch ($params[0]) {
    case 'home':
        # code...
        break;

    case 'showItems':
        break;
    
    default:
        echo 'Error not found';
        break;
}
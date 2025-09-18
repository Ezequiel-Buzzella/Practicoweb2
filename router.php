<?php
require_once "index.php";




if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {

    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        showHome();
        break;

    case 'showItems':
        break;

    case 'showCategories':
        showCategorie();
        break;


    default:
        echo 'Error not found';
        break;
}

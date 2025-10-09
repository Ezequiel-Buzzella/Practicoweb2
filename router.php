<?php
require_once '/Controller/CategoryController.php';

require_once '/Controller/ProductController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
  $action = $_GET['action'];
}else{
  $action = 'home';
}


$params = explode('/',$params);

$productController = new ProductController();
$categoryController = new CategoryController();


switch ($params[0]) {
  case 'home':
    // code...
    break;

  default:
    echo 'error';
    break;
}

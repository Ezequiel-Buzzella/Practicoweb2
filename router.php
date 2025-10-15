<?php
require_once './controller/ProductController.php';
require_once './controller/CategoryController.php';
require_once './view/index.php';
require_once './controller/UserController.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');



if (!empty($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'home';
}


$params = explode('/', $action);

$index = new index();
$productController = new ProductController();
$categoryController = new CategoryController();
$userController = new UserController();

switch ($params[0]) {
  case 'home':
    $index->showHome();
    break;

  case 'showCategories':
    $categoryController->showCategories();
    break;

  case 'showProducts':
    $categories = $categoryController->getCategories();
    $productController->showProducts($categories);
    break;

  case 'showProductsByCatgory':
    $productController->showProductsByCategory($params[1]);
    break;
  case 'insertProduct':
    $productController->insertProduct();
    break;
  case 'insertCategory':
    $categoryController->insertCategory();
    break;
  case 'deleteProduct':
    $productController->deleteProduct($params[1]);
    break;

  case 'deleteCategory':
    $categoryController->deleteCategory($params[1]);
    break;

  case 'editProduct':
    $categories = $categoryController->getCategories();
    $productController->editProduct($params[1], $categories);
    break;

  case 'updateProduct':
    $productController->updateProduct();
    break;

  case 'editCategory':
    $categoryController->editCategory($params[1]);
    break;
  case 'updateCategory':
    $categoryController->updateCategory();
    break;

  default:
    echo 'error';
    break;
}

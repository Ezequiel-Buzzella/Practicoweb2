<?php
require_once './model/ProductModel.php';
require_once './view/ProductView.php';

define('MAX_PRIOTRIY',5);
class ProductController
{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }


    function home(){
        $this->view->showHome();
    }

    function showProducts(){
        
    }

}

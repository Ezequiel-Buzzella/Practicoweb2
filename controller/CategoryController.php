<?php
require_once './model/CategoryModel.php';
require_once './view/CategoryView.php';
class CategoryController
{
    private $view;
    private $model;

    public function __construct() {
        $this->view = new CategoryView();
        $this->model = new CategoryModel();
    }

    function getCategories(){
        return $this->model->showAll();
    }

    function showCategories(){
        $categories = $this->model->showAll();
        $this->view->showCategories($categories);
    }
}

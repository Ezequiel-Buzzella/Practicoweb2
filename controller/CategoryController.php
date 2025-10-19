<?php
require_once './model/CategoryModel.php';
require_once './view/CategoryView.php';
require_once './view/index.php';
require_once './helper/AuthHelper.php';

class CategoryController
{
    private $view;
    private $model;
    private $index;
    private $helper;

    public function __construct()
    {
        $this->view = new CategoryView();
        $this->model = new CategoryModel();
        $this->index = new index();
        $this->helper = new AuthHelper();
    }

    function getCategories()
    {
        $this->helper->checkLogin();
        return $this->model->showAll();
    }

        function getPublicCategories()
    {
        return $this->model->showAll();
    }


    function showCategories()
    {
        $this->helper->checkLogin();
        $categories = $this->model->showAll();
        $this->view->showCategories($categories);
    }

    function insertCategory()
    {
        $this->helper->checkLogin();
        $name = $_POST['nombre_categoria'];
        $description = $_POST['descripcion_categoria'];
        $image = $_POST['imagen_categoria'];
        $this->model->insertCategory($name, $description, $image);
        $this->index->showHome();
    }

    function deleteCategory($id_categoria)
    {
        $this->helper->checkLogin();
        $this->model->deleteCategory($id_categoria);
        header("Location: " . BASE_URL . "showCategories");
    }
    function editCategory($id_categoria)
    {
        $this->helper->checkLogin();
        $category = $this->model->getById($id_categoria);
        $this->view->editCategory($category);
    }
    function updateCategory()
    {
        $this->helper->checkLogin();
        $id_category = $_POST['id_categoria'];
        $category_name = $_POST['nombre_categoria'];
        $category_description = $_POST['descripcion_categoria'];
        $this->model->updateCategory($id_category, $category_name, $category_description);
        header('Location: ' . BASE_URL . 'showCategories');
    }


    public function showPublicCategories(){
        $categories = $this->model->showAll();
        $this->view->showPublicCategories($categories);
    }
}

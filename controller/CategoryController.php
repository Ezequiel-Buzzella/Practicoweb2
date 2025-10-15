<?php
require_once './model/CategoryModel.php';
require_once './view/CategoryView.php';
require_once './view/index.php';
class CategoryController
{
    private $view;
    private $model;
    private $index;

    public function __construct() {
        $this->view = new CategoryView();
        $this->model = new CategoryModel();
        $this->index = new index();
    }

    function getCategories(){
        return $this->model->showAll();
    }

    function showCategories(){
        $categories = $this->model->showAll();
        $this->view->showCategories($categories);
    }

    function insertCategory(){
        $name = $_POST['nombre_categoria'];
        $description = $_POST['descripcion_categoria'];
        $image = $_POST['imagen_categoria'];
        $this->model->insertCategory($name,$description,$image);
        $this->index->showHome();
    }

    function deleteCategory($id_categoria){
        $this->model->deleteCategory($id_categoria);
        header("Location: " . BASE_URL . "showCategories");
    }
    function editCategory($id_categoria){
        $category = $this->model->getById($id_categoria);
        $this->view->editCategory($category);
    }
    function updateCategory(){
        $id_category = $_POST['id_categoria'];
        $category_name = $_POST['nombre_categoria'];
        $category_description = $_POST['descripcion_categoria'];
        $this->model->updateCategory($id_category,$category_name,$category_description);
        header('Location: ' . BASE_URL . 'showCategories');


    }
}

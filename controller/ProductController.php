<?php
require_once './model/ProductModel.php';
require_once './view/ProductView.php';

define('MAX_PRIOTRIY', 5);
class ProductController
{
    private $model;
    private $view;


    public function __construct()
    {
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }


    function home()
    {
        $this->view->showHome();
    }

    function showProducts($categories = [])
    {
        $products = $this->model->showAll();
        $this->view->showProducts($products,$categories);
    }

    function insertProduct()
    {
        $nombre_producto = $_POST["nombre_producto"];
        $descripcion_producto = $_POST["descripcion_producto"];
        $precio_producto = $_POST["precio_producto"];
        $id_categoria = $_POST["fk_id_categoria"];
        $this->model->insertProduct($nombre_producto, $descripcion_producto, $precio_producto, $id_categoria);
        $this->view->showHome();
    }

    function showProductsByCategory($id_categoria)
    {
        $products = $this->model->showProductsByCategory($id_categoria);
        $this->view->showProductsByCategory($products);
    }
}

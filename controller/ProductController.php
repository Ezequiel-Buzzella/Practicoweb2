<?php
require_once './model/ProductModel.php';
require_once './view/ProductView.php';
require_once './view/index.php';
require_once './helper/AuthHelper.php';



class ProductController
{
    private $model;
    private $view;
    private $index;
    private $helper;


    public function __construct()
    {
        $this->model = new ProductModel();
        $this->view = new ProductView();
        $this->index = new index();
        $this->helper = new AuthHelper();
    }

    function showProducts($categories = [])
    {
        $this->helper->checkLogin();
        $products = $this->model->showAll();
        $this->view->showProducts($products, $categories);
    }

    function insertProduct()
    {
        $this->helper->checkLogin();
        $nombre_producto = $_POST["nombre_producto"];
        $descripcion_producto = $_POST["descripcion_producto"];
        $precio_producto = $_POST["precio_producto"];
        $id_categoria = $_POST["fk_id_categoria"];
        $this->model->insertProduct($nombre_producto, $descripcion_producto, $precio_producto, $id_categoria);
        $this->index->showHome();
    }

    function showProductsByCategory($id_categoria)
    {
        $this->helper->checkLogin();
        $products = $this->model->showProductsByCategory($id_categoria);
        $this->view->showProductsByCategory($products);
    }

    function deleteProduct($id_producto)
    {
        $this->helper->checkLogin();
        $this->model->deleteProduct($id_producto);
        header("Location: " . BASE_URL . "showProducts");
    }

    function editProduct($id_producto, $categories = [])
    {
        $this->helper->checkLogin();
        $product = $this->model->getProductById($id_producto);
        $this->view->showEditProduct($product, $categories);
    }
    function updateProduct()
    {
        $this->helper->checkLogin();
        $id_producto = $_POST['id_producto'];
        $nombre_producto = $_POST['nombre_producto'];
        $descripcion_producto = $_POST['descripcion_producto'];
        $precio_producto = $_POST['precio_producto'];
        $fk_id_categoria = $_POST['fk_id_categoria'];

        $this->model->updateProduct($id_producto, $nombre_producto, $descripcion_producto, $precio_producto, $fk_id_categoria);

        header('Location: ' . BASE_URL . 'showProducts');
    }

    function showPublicProducts($categories = [])
    {   $products=$this->model->showAll();
        $this->view->showPublicProducts($products, $categories);
    }

    function showPublicProductsByCategory($id_categoria)
    {
        $products = $this->model->showProductsByCategory($id_categoria);
        $this->view->showProductsByCategory($products);
    }
}

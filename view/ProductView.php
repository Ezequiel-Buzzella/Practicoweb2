<?php


class ProductView
{

    function showProducts($products, $categories)
    {
        $product = $products;
        $category = $categories;
        require_once './templates/showProducts.phtml';
    }

    function showProductsByCategory($products)
    {
        $product = $products;
        require_once './templates/showProductsByCategory.phtml';
    }

    function showEditProduct($products, $categories)
    {
        $product = $products;
        $category = $categories;
        require 'templates/editProduct.phtml';
    }

    function showPublicProducts($products,$categories){
        $product = $products;
        $category = $categories;
        require_once './templates/showPublicProduct.phtml';

    }

    function showPublicProductsByCategory($products,$categoires){
        $product = $products;
        $category = $categoires;
        require_once ' ./templates/showPublicProductsByCategory.phtml';

    }


}

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


}

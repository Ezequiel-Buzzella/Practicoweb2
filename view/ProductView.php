<?php


class ProductView
{

    function showHome(){
        require_once './templates/home.phtml';
    }

    function showProducts($products,$categories){
        $product = $products;
        $category = $categories;
        require_once './templates/showProducts.phtml';
    }

        function showProductsByCategory($products){
        $product = $products;
        require_once './templates/showProductsByCategory.phtml';
    }
}

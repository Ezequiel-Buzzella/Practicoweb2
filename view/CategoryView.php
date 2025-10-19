<?php

class CategoryView {

    function showCategories($categories){
        $category = $categories;
        require_once './templates/showCategories.phtml';
    }

    function editCategory($categories){
        $category = $categories;
        require_once './templates/editCategory.phtml';

    }

    function showPublicCategories($categories){
        $category = $categories;
        require_once './templates/showPublicCategory.phtml';
    }



}

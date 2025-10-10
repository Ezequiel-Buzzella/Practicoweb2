<?php

class CategoryView {

    function showCategories($categories){
        $category = $categories;
        require_once './templates/showCategories.phtml';
    }

}

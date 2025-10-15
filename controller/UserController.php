<?php
require_once './model/UserModel.php';
require_once './view/UserView.php';
class UserController
{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    function register(){
        
    }
}

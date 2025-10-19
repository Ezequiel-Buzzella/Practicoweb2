<?php
require_once './model/UserModel.php';
require_once './view/UserView.php';

class UserController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    private function getUserCredentials()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            return [
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];
        }
        return null;
    }

function register()
{
    $error = null;
    $userCredentials = $this->getUserCredentials();

    if ($userCredentials) {
        $email = $userCredentials['email'];
        $password = password_hash($userCredentials['password'], PASSWORD_BCRYPT);

        if ($this->model->getUserByEmail($email)) {
            $error = "El usuario ya existe";
            $this->view->registerView($error);
            return;
        }

        $this->model->saveUser($email, $password);


        header('Location:' . BASE_URL . 'login');
        exit;
    } elseif (!empty($_POST)) {
        $error = "Tenés que completar los datos";
    }


    $this->view->registerView($error);
}

    function login()
    {
        session_start();
        $error = null;

        $userCredentials = $this->getUserCredentials();

        if ($userCredentials) {
            $user = $this->model->getUserByEmail($userCredentials['email']);
            if ($user && password_verify($userCredentials['password'], $user->password)) {
                $_SESSION['email']= $user->email;
                header('Location:' . BASE_URL . 'home');
                exit;
            } else {
                $error = "Email o contraseña incorrectos";
            }
        } elseif (!empty($_POST)) {
            $error = "Debe ingresar email y contraseña";
        }

        $this->view->loginView($error);
    }

    function logout()
    {
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL . 'login');
    }

    function guestLogin(){
        $_SESSION['email'] = "guest@guest.com";

        header('Location:'.BASE_URL.'home');
    }


}

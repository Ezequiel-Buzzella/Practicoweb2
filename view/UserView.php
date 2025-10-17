<?php
class UserView
{
    function registerView($error = null)
    {
        require_once './templates/userRegister.phtml';
    }

    function loginView($error = null)
    {
        require_once './templates/userLogin.phtml';
    }
}

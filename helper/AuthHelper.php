<?php
final class AuthHelper
{
    private function ensureSessionStarted()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    function checkLogin()
    {
        $this->ensureSessionStarted();
        if (!isset($_SESSION["email"])) {
            header('Location:' . BASE_URL . 'login');
            exit;
        }
    }

    function isLoggedIn()
    {
        $this->ensureSessionStarted();
        return isset($_SESSION["email"]);
    }
}
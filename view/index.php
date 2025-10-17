<?php

final class index
{
    public function __construct()
    {
    }
    function showHome()
    {
        require_once('./templates/home.phtml');
    }
}

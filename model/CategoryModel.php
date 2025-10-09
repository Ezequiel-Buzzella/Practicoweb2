<?php

require_once "./BaseModel.php";

class CategoryModel extends BaseModel
{
  private $db;

  function __construct()
  {
    $this->db = new BaseModel();
  }
}

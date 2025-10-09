<?php

require_once "./BaseModel.php";

class ProductModel extends BaseModel
{
  private $db;

  function __construct()
  {
    $this->db = new BaseModel();

  }

  function showAll(){
    $query = $this->db->prepare('SELECT * FROM producto');
    $query->execute();
    $products = $query->fetchALL(PDO::FETCH_OBJ);
    return $products;
  }

}

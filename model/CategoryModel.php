<?php

require_once "./BaseModel.php";

class CategoryModel extends BaseModel
{

  function showAll(){
    $query = $this->db->prepare('SELECT * FROM categoria');
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_OBJ);
    return $categories;
  }
}

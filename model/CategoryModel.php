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

  function insertCategory($nombre_categoria,$descripcion_categoria){
    $query = $this->db->prepare('INSERT INTO categoria(nombre_categoria,descripcion_categoria)
    VALUES (?,?)');
    $query->execute([$nombre_categoria,$descripcion_categoria]);

  }

  function updateCategory($id_categoria){

  }


  function deleteCategory($id_categoria){
    $query = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=?");
    $query->execute([$id_categoria]);
  }
}

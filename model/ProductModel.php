<?php

require "BaseModel.php";

class ProductModel extends BaseModel {

  function showAll(){
    $query = $this->db->prepare("SELECT * FROM producto");
    $query->execute();
    $products = $query->fetchALL(PDO::FETCH_OBJ);
    return $products;
  }

  function insertProduct($id_producto,$nombre_producto,$descripcion_producto,$precio_producto,$fk_id_categoria){
    $query = $this->db->prepare('INSERT INTO producto(id_producto,nombre_producto,descripcion_producto,precio_producto,fk_id_categoria)
     VALUES (?,?,?,?,?)');
     $query->execute([$id_producto,$nombre_producto,$descripcion_producto,$precio_producto,$fk_id_categoria]);

  }

}

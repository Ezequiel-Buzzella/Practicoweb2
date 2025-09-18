<?php

function connect()
{
    return new PDO('mysql:host=localhost;dbname=db;charset=utf8', 'root', '');
}


function showItems()
{
    $db = connect();
    $query = $db->prepare("SELECT * FROM producto");
    $query->execute();
    $items = $query->fetchAll(PDO::FETCH_OBJ);
    return $items;
}

function showCategories()
{
    $db = connect();
    $query = $db->prepare("SELECT * FROM categoria");
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_OBJ);
    return $categories;
}

function insertItem($id_producto, $nombre_producto, $descripcion_producto, $precio_producto, $fk_id_categoria)
{
    $db = connect();
    $query = $db->prepare('INSERT INTO producto(id_producto,nombre_producto,descripcion_producto
                                                precio_producto,fk_id_categoria) VALUES (?,?,?,?,?)');
    $query->execute([$id_producto, $nombre_producto, $descripcion_producto, $precio_producto, $fk_id_categoria]);
}

<?php

function connect(){
    return new PDO('mysql:host=localhost;dbname=db;charset=utf8', 'root', '');

}


function showItems(){
    $db = connect();
    $query = $db->prepare("SELECT * FROM producto");
    $query->execute();
    $items = $query->fetchAll(PDO::FETCH_OBJ);
    return $items;
}

function insertItem(){
    
}

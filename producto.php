<?php
require './templates/header.php';
require_once 'db.php';

function showItems(){
    $items = showItems();

    foreach ($items as $i) {
        echo "<li>$i</li>";
    }
}


require './templates/footer.php';
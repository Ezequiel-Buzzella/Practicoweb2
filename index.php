<?php
require_once './templates/header.php';
require_once 'db.php';

function showHome()
{
    echo "<h1>Bienvenido a comercial Tudai</h1>";
    echo "<p>Aca vas a encontrar todo lo que necesites</p>";
}

function showCategorie()
{
    $categories = showcategories();
    echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre de la categoria</th>
      <th scope="col">Descripcion de la categoria</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>';
    foreach ($categories as $c) {
        echo '    <tr>
      <th scope="row">'.$c->ide_categoria.'</th>
      <td>'.$c->nombre_categoria.'</td>
      <td>'.$c->descripcion_categoria.'</td>
      <td><a href="#">Ver mas</a></td>
    </tr>';
    }
    echo '  </tbody>
</table>';
}


require_once './templates/footer.php';

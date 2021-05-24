<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

$datos = DB::execute_sql("SELECT * FROM articulos");
$res = $datos-> fetchAll();


View::navigation();

echo " <a href='nuevoArticulo.php'><input type='button' value='Nuevo articulo'></a>
        <table class='table'>
        <thead class='thead-dark'>
        <tr>
            <th> Articulo </th>
            <th> Nombre </th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>";

foreach($res as $articulo){

    echo "<tr id='{$articulo['id']}'>
            <td> {$articulo['id']} </th>
            <td> {$articulo['nombre']} </th>
            <td> <a href='modificarA.php'><input type='button' value='Editar'></a></td>
            <td> <input type='button' onclick='borrarArticulos({$articulo['id']})' value='Eliminar'></td>
        </tr>";
}
echo " <t/body>
        </table>
        <a href='nuevoArticulo.php'><input type='button' value='Nuevo articulo'></a>";
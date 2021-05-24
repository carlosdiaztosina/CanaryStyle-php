<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

$datos = DB::execute_sql("SELECT * FROM articulos");
$res = $datos-> fetchAll();


View::navigation();

echo " <table>
        <tr>
            <th> Articulo </th>
            <th> Nombre </th>
        </tr>";

foreach($res as $articulo){

    echo "<tr id='{$articulo['id']}'>
            <th> {$articulo['id']} </th>
            <th> {$articulo['nombre']} </th>
            <th> <a href='modificarA.php'><input type='button' value='Editar'></a></th>
            <th> <input type='button' onclick='borrarArticulos({$articulo['id']})' value='Eliminar'></th>
        </tr>";
}

echo " </table>
        <a href='nuevoArticulo.php'><input type='button' value='Nuevo articulo'></a>";
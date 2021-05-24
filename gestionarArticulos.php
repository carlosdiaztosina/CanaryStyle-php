<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

$datos = DB::execute_sql("SELECT * FROM articulos");
$res = $datos-> fetchAll();


View::navigation();

echo "<table>
        <tr>
            <th> Articulo </th>
            <th> Nombre </th>
        </tr>";

foreach($res as $articulo){

    echo "<tr>
            <th> {$articulo['id']} </th>
            <th> {$articulo['nombre']} </th>
            <th><input type='submit' name='' value='Editar'></th>
            <th> Borrar </th>
        </tr>";
}

echo " </table>
        <a href='nuevoArticulo.php'><input type='button' value='Nuevo articulo'></a>";
<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

$datos = DB::execute_sql("SELECT * FROM usuarios");
$res = $datos-> fetchAll();

View::navigation();

echo "<table class='table'>
        <thead class='thead-dark'>
        <tr>
            <th> Cuenta </th>
            <th> Nombre </th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>";

foreach($res as $usuarios){

    echo "<tr id='{$usuarios['id']}'>
            <td> {$usuarios['cuenta']} </td>
            <td> {$usuarios['nombre']} </td>
            <td><input type='button' onclick='editarUsuarios({$usuarios['id']})' value='Editar'></td>
            <td><input type='button' onclick='borrarUsuarios({$usuarios['id']})' value='Eliminar'></td>
        </tr>";
}

echo"</tbody>
    </table>
    <a href='nuevoUsuario.php'><input type='button' value='Nuevo usuario'></a>";
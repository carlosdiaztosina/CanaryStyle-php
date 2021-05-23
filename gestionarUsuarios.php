<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

$datos = DB::execute_sql("SELECT * FROM usuarios");
$res = $datos-> fetchAll();

View::navigation();

echo "<table>
        <tr>
            <th> Cuenta </th>
            <th> Nombre </th>
        </tr>";

foreach($res as $usuarios){

    echo "<tr id='{$usuarios['id']}'>
            <th> {$usuarios['cuenta']} </th>
            <th> {$usuarios['nombre']} </th>
            <th><input type='button' onclick='editarUsuarios({$usuarios['id']})' value='Editar'></th>
            <th><input type='button' onclick='borrarUsuarios({$usuarios['id']})' value='Eliminar'></th>
        </tr>";
}

echo"</table>
    <a href='nuevoUsuario.php'><input type='button' value='Nuevo usuario'></a>";
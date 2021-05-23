<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

$datos = DB::execute_sql("SELECT * FROM usuarios WHERE usuarios.id = ?", array($_SESSION['user']['id']));
$res = $datos-> fetchAll();
$nombre = $_SESSION['user']['nombre'];

View::navigation();

echo "<h1 class='perfil'> Bienvenido {$nombre} </h1>
        <div class='wrapper-contacto'>
            <section class='form1'>";

    foreach($res as $value){
        echo "<div class='letras-perfil'>
              <label> Cuenta: {$value['cuenta']} </label>
            </div>
            <div>
              <label> Nombre: {$value['nombre']} </label>
            </div>
            <div>
              <label> Telefono: {$value['telefono']} </label>
            </div>
            <div>
              <label> Direccion: {$value['direccion']} </label>
            </div>
            <input type='button' value='Modificar datos' onclick=''>";
    }


View::end();
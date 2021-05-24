<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

$datos = DB::execute_sql("SELECT * FROM usuarios WHERE usuarios.id = ?", array($_SESSION['user']['id']));
$res = $datos-> fetchAll();


View::navigation();



    foreach($res as $value){
      echo "<h1 class='perfil'> Bienvenido {$value['nombre']} </h1>
        <div class='wrapper-contacto'>
            <section class='form1'>";
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
            <a href='modificar.php'><input type='button' value='Modificar datos'></a><br>";
    }

    if($_SESSION['user']['tipo'] == 0){
        echo "<a href='gestionarUsuarios.php'><input type='button' value='Gestionar usuarios'></a><br>
              <a href='gestionarArticulos.php'><input type='button'value='Gestionar articulos'></a>";
    }


View::end();
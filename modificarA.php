<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");
$nombre = $_SESSION['user']['nombre'];

View::navigation();

echo "<h1 class='perfil'> Bienvenido {$nombre} </h1>
        <div class='wrapper-contacto'>
            <form action='modificarArticulo.php' mehtod='POST'>
                <p><input type='input' name='id' placeholder='Cambiar id'></p>
                <p><input type='text' name='nombre' placeholder='Cambiar nombre'></p>
                <p><input type='text' name='precio' placeholder='Cambiar precio'></p>
                <p><input type='input' name='tipo' placeholder='Cambiar tipo'></p>
                <p><input type='file' name='imagen'placeholder='Cambiar imagen'></p>
                <input type='submit' value='Actualizar articulo'>

            </form>";


View::end();
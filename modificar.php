<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");
$nombre = $_SESSION['user']['nombre'];

View::navigation();

echo "<h1 class='perfil'> Bienvenido {$nombre} </h1>
        <div class='wrapper-contacto'>
            <form action='modificarCuenta.php' mehtod='POST'>
                <p><input type='text' name='cuenta' placeholder='Cambiar cuenta'></p>
                <p><input type='text' name='nombre' placeholder='Cambiar nombre'></p>
                <p><input type='email' name='email' placeholder='Cambiar email'></p>
                <p><input type='text' name='telefono' placeholder='Cambiar telefono'></p>
                <p><input type='text' name='direccion'placeholder='Cambiar direccion'></p>
                <p><input type='password' name='passwd' placeholder='Cambiar contraseña'></p>
                <input type='submit' value='Cambiar datos'>

            </form>";


View::end();
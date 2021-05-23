<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

View::navigation();

echo "<div class='wrapper-contacto'>
            <form action='añadirUsuario.php' mehtod='POST'>
                <p><input type='text' name='cuenta' placeholder='Crear cuenta'></p>
                <p><input type='text' name='nombre' placeholder='Crear nombre'></p>
                <p><input type='email' name='email' placeholder='Crear email'></p>
                <p><input type='text' name='telefono' placeholder='Crear telefono'></p>
                <p><input type='text' name='direccion'placeholder='Crear direccion'></p>
                <p><input type='password' name='passwd' placeholder='Crear contraseña'></p>
                <input type='submit' value='Nuevo usuario'>

            </form>";


View::end();
<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

View::navigation();

echo "<div class='wrapper-contacto'>
            <form action='añadirArticulo.php' method='POST'>
                <p><input type='text' name='nombre' placeholder='Crear nombre'></p>
                <p><input type='text' name='precio' placeholder='Crear precio'></p>
                <p><input type='input' name='tipo' placeholder='Crear tipo'></p>
                <p><input type='file' name='imagen' placeholder='Archivo a subir'></p>
                <input type='submit' value='Crear Articulo'>

            </form>";


View::end();
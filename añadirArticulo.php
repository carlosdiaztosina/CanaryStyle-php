<?php
    include_once 'presentation.class.php';
    View::start("Añadir entrada al historial");
    View::navigation();


    DB::execute_sql("INSERT INTO articulos (nombre, precio, tipo, imagen) VALUES (?,?,?,?)", 
                        array($_POST['nombre'], $_POST['precio'], $_POST['tipo'], readfile($_POST['imagen'])));

    header('Location: gestionarArticulos.php');

    View::end();
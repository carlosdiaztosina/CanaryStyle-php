<?php
    include_once 'presentation.class.php';
    View::start("Añadir entrada al historial");
    View::navigation();

    $tipo=1;
    DB::execute_sql("INSERT INTO usuarios (cuenta, clave, nombre, tipo, email, direccion, telefono) VALUES (?,?,?,?,?,?,?)", 
                        array($_POST['cuenta'], md5($_POST['passwd']), $_POST['nombre'], $tipo, $_POST['email'], $_POST['direccion'], $_POST['telefono']));
    
    header('Location: gestionarUsuarios.php');                    

    View::end();
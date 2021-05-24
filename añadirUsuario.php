<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';


if(User::getLoggedUser() == false){
    echo"<h2>Error de sesion</h2>";
} else {
    $datos = DB::execute_sql("INSERT INTO usuarios (cuenta, clave, nombre, tipo, email, direccion, telefono) VALUES (?,?,?,?,?,?,?)", 
                            array($_POST['cuenta'], $_POST['passwd'], $_POST['nombre'], 1, $_POST['email'], $_POST['direccion'], $_POST['telefono']));
}
<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';


if(User::getLoggedUser() == false){
    echo"<h2>Error de sesion</h2>";
} else {
    $datos = DB::execute_sql("INSERT INTO articulos (id, nombre, precio, tipo, imagen) VALUES (?,?,?,?,?)", 
                                array($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['tipo'], $_POST['imagen']));
}
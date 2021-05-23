<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

if(User::getLoggedUser() == false){
    echo"<h2>Error de sesion</h2>";
} else {
    $datos = DB::execute_sql("UPDATE articulo SET id=?, nombre=?, precio=?, tipo=?, imagen=? WHERE articulo.id = ?", 
                                array($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['tipo'], $_POST['imagen']));
}

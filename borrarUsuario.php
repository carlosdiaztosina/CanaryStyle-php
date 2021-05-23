<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

View::navigation();

if(User::getLoggedUser() == false && $_SESSION['user']['tipo'] == 0){
    echo"<h2>Error de sesion</h2>";
} else {
    $datos = DB::execute_sql("DELETE FROM articulos WHERE articulos.id", 
                                array();
}
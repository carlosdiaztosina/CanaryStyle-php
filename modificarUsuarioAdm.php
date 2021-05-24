<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::start("Canary Styles | Perfil ");

View::navigation();

if(User::getLoggedUser() == false){
    echo"<h2>Error de sesion</h2>";
} else {
    $datos = DB::execute_sql("UPDATE usuarios SET cuenta=?, clave=?, nombre=?, tipo=?, email=?, direccion=?, telefono=? WHERE usuarios.id = ?", 
                                array($_POST['cuenta'], md5($_POST['passwd']), $_POST['nombre'], 1, $_POST['email'], $_POST['direccion'], $_POST['telefono'],$_POST['iduser']));
    
    header("Location:gestionarUsuarios.php");
}




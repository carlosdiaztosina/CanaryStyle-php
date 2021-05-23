<?php
    include_once 'business.class.php';        
    
    if(USER::getLoggedUser() == false){

        echo "<h3>Error, no hay una sesión iniciada</h3>";
    }else{
    
        if(User::logout()) {

            echo "<h3>Sesion cerrada</h3>";
        }else{

            echo "<h3>Error al cerrar sesion</h3>";
            echo "<a href='logOut.php'>Volver a intentar</a>";
        }
        header('Location: index.php');
    }
    

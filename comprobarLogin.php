<?php
    include_once busines.class.php; 

    if(USER::getLoggedUser() != false){
        echo "<h3>Error, sesión ya iniciada</h3>";
    }else{
        $usuario = $_POST['email'];
        $pass = $_POST['password'];
        
        
        if(User::login($usuario, $pass)) {
            echo "<h3>Sesion iniciada</h3>";
        }else{
            echo "<h3>Error al iniciar sesion</h3>";
            echo "<a href='login.php'>Volver a intentar</a>";
        }
    }
    echo "<a href='index.php'>Volver al inicio</a>";
    
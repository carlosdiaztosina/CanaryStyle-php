<?php
    include_once 'busines.class.php'; 
    
    if(USER::getLoggedUser() != false){
        echo "<h3>Error, sesión ya iniciada</h3>";
    }else{
        if(User::comprobarRegistro()){
            echo "<h3>Usuario registrado</h3>";
            if($_POST['tipo']==2){
                $sql = DB::execute_sql("SELECT usuarios.id FROM usuarios WHERE usuarios.cuenta = ?", array($_POST['cuenta']));
                foreach($sql as $registro){
                    $idespecialista = $registro['id'];
                }
            }
        }else{
            echo "<h3>Error al registrar el usuario</h3>";
            echo "<a href='registrar.php'>Volver a intentar</a>";
        }
    }
    echo "<a href='index.php'>Volver al inicio</a>";
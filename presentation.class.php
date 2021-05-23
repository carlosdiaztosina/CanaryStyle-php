<?php
include_once 'business.class.php';
class View{
    public static function  start($title){
        $html = "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos.css\">
<script src=\"scripts.js\" defer></script>
<title>$title</title>
</head>
<body>";
        User::session_start();
        echo $html;
    }

    public static function navigation(){
        $user = User::getLoggedUser();
        if($user == false) {
            echo "<a href='login.php'>Iniciar sesión</a>";
            echo "<a href='registrar.php'>Registrarse</a>";
        } else {
            $nombre = $user['nombre'];
            echo "<h3>Bienvenido, {$nombre}</h3>";
            echo "<a href='logout.php'>Cerrar sesión</a><br>";
            echo '<nav>';
            echo '<ul>';
            switch($user['tipo']) {
                case 1:
                    echo '<li><a href="verEspecialistas.php">Ver especialistas</a></li>'
                        . '<li><a href="CrudUsuarios.php">CRUD USUARIOS</a></li>';
                    
                   break;
                case 2:
                   echo '<li><a href="verPacientes.php">Ver pacientes</a></li>';
                   break;
                case 3:
                    echo '<li><a href="añadirHistorial.php">Añadir historial</a></li>';
                    break;
                case 4:
                    echo '<li><a href="especialistas.php">Ver especialistas</a></li>'
                       . '<li><a href="historial.php">Ver historial</a></li>';
                    break;
            }
            echo '</ul>';       
            echo '</nav>';
        }
        
    }

    public static function end(){
        echo '</body>
              </html>';
    }
}
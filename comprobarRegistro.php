<?php
    include_once 'data-access.class.php';
    
    
    
    if(comprobarParametros() == true) {
        $tipo = 1;
        $params = array($_POST['cuenta'],md5($_POST['password']),$_POST['nombre'],$tipo,$_POST['email'],$_POST['direccion'], $_POST['telefono']);
        DB::execute_sql("INSERT INTO usuarios (cuenta,clave,nombre,tipo,email,direccion,telefono) VALUES (?,?,?,?,?,?,?)", $params);
        header('Location:index.php');  
    } 
    
    function comprobarParametros() {
       foreach($_POST as $field) {
            if($field == "") {
                echo "Algun campo introducido esta vacio";
                return false;
            }
        } 
        
        if($_POST['tipo'] > 1 || $_POST['tipo'] < 0) {
            echo "El tipo no puede ser mayor de 4 ni menor que 1";
            return false;
        }
        
        if(DB::user_exists($_POST['cuenta'], $_POST['password'], $res)) {
            echo "El usuario ya existe";
            return false;
        }
        
        return true;
    }

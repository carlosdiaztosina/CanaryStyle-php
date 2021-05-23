<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

$datos = DB::execute_sql("SELECT * FROM usuarios");
$datos-> fetchAll();


View::navigation();

echo '<h1> Perfil del usuario </h1>
        <div class="wrapper-contacto">
            <section class="form1">';

    foreach($datos as $value){
        echo '<div>
              
            </div>';
    }
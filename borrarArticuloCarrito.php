<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';
View::start("");

$datos = DB::execute_sql('DELETE FROM carrito WHERE carrito.id = ? ',array($_POST['id']));
header("Location:carrito.php");
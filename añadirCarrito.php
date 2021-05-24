<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

View::navigation();
$precio = $_POST['precio'];
$preciototal = doubleval($precio) * $_POST['cantidad'];

DB::execute_sql('INSERT INTO carrito(idusuario,idarticulo,preciototal,talla,cantidad) VALUES (?,?,?,?,?)',array($_SESSION['user']['id'],$_POST['id'],$preciototal,$_POST['talla'],$_POST['cantidad']));
header("Location:carrito.php");
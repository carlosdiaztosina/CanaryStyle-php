<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';
echo'
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
    <title>CanaryStyle | HOME</title>
</head>
<body>';
View::navigation();

$datos=DB::execute_sql('SELECT * FROM  usuarios JOIN  articulos JOIN  carrito WHERE carrito.idusuario = ?  AND carrito.idarticulo = articulos.id AND usuarios.id = carrito.idusuario',array($_SESSION['user']['id']));

    echo '<h1 class="tituloproducto">Carrito</h1>
        <div class="tabla">
            <table class="table">
                <!-- Encabezado de la tabla -->
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>Producto</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>Unidades</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <!-- Cuerpo de la tabla -->
                <tbody>
                    <tr>';
                    foreach($datos as $result){
                        $talla=obtenerTalla($result['talla']);
                        $imagen=View::imgtobase64($result['imagen']);
                        echo"
                        <td class='imagencarrito'><img  src='{$imagen}' alt='prenda1-carrito' /></td>
                        <td>{$result['nombre']}</td>
                        <td>{$talla}</td>
                        <td>{$result['precio']}€</td>
                        <td>{$result['cantidad']}</td>
                        <td>{$result['preciototal']}€</td>
                        <td class='eliminar'>
                        <form method='POST' action='borrarArticuloCarrito.php'>
                        <input type='hidden' name='id' value='{$result['id']}'>
                        <input type='submit' value='Eliminar'>
                        </form>
                        </td>
                        </tr>";
                    }
                    
                 echo'   
                </tbody>
            </table>
        </div>
            
    
</body>

<footer>
    <div class="footer-img">
        <img src="images/instagram.png" alt="instagram" class="instagram">
        <img src="images/maps.png" alt="maps" class="maps">
        <img src="images/phone.png" alt="phone" class="phone">
        <img src="images/twitter.png" alt="twitter" class="twitter">
    </div>
    <div class="footer-bottom">
        <div class="footer-terms">
            <a href="contacto.php">Contacto</a>
            <a href="#">Términos y condiciones</a>
        </div>

        <div class="footer-copy">
            © 2021 CanaryStyle
        </div>
    </div>
</footer>
</html>';

function obtenerTalla($talla){
    switch($talla){
        case 1:
            return $talla = 'S';
            
        case 2:
            return $talla = 'M';
            
        case 3:
            return $talla = 'L';
            
        case 4:
            return $talla = 'XL';
            
        default:
            break;
    }
}

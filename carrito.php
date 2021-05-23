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
    <title>CanaryStyle | HOME</title>
</head>
<body>';
View::navigation();
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
                    <tr>
                        <td class="imagencarrito"><img  src="images/FotosHombres/Camisetas/camiseta1.jpg" alt="prenda1-carrito" /></td>
                        <td>Tupac</td>
                        <td>L</td>
                        <td>10€</td>
                        <td>1</td>
                        <td>10€</td>
                        <td class="eliminar"><img  src="images/eliminar.png" alt="eliminar" /></td>
                    </tr>
                    <tr>
                        <td class="imagencarrito"><img  src="images/FotosMujeres/Sudaderas/sudadera6.jpg" alt="prenda2-carrito" /></td>
                        <td>Nascita di Venere</td>
                        <td>M</td>
                        <td>29,99€</td>
                        <td>2</td>
                        <td>59,98€</td>
                        <td class="eliminar"><img  src="images/eliminar.png" alt="eliminar" /></td>
                    </tr>

                    
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
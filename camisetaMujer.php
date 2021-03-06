<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';
echo'
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>CanaryStyle</title>
    <script>
        $(document).ready(function () {
            var id = new URLSearchParams(window.location.search);
            getDatos(6,0,id.get("id"))
            //cargarProducto(10,0,id.get("id"));
        });
    </script>
</head>
<body>';
View::navigation();
    echo '<h1 class="tituloproducto"></h1>
    <!-- Usamos bootstrap para el grid -->
    <div class="row camiseta-row">
        <div id="productoImg" class="col camiseta-img">

        </div>
        <div class="col camiseta-data">
            <div class="productosetup">
                <div class="tallaproducto">
                    <p>Talla:</p>
                    <select name="menu">
                        <option>S</option>
                        <option>M</option> 
                        <option>L</option>
                        <option>XL</option>  
                    </select>
                </div>
                <div class="cantidadproducto">
                    <p>Cantidad: </p>
                    <input type="number" id="quantity" name="quantity" min="1" max="20" step="1" value="1">                
                </div>
                <div id="productoPrecio" class="precioproducto">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <p>Los clientes tambi??n compran</p>
            </div>
        </div>
        <div class="row">
            <div class="col hoverclientes">
                <img src="images/FotosHombres/Pantalones/pantalon3.jpg" alt="pantalon-1">
            </div>
            <div class="col hoverclientes">
                <img src="images/FotosHombres/Camisetas/camiseta4.jpg" alt="pizza-2">
            </div>
            <div class="col hoverclientes">
                <img src="images/FotosMujeres/Sudaderas/sudadera1.jpg" alt="pizza-3">
            </div>
        </div>
    </div>

    </div>

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
                <a href="#">T??rminos y condiciones</a>
            </div>
    
            <div class="footer-copy">
                ?? 2020 CanaryStyle
            </div>
        </div>
    </footer>

    
</body>
</html>';
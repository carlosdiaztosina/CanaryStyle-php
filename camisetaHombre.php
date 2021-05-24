<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';
echo '
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
    
    <title>CanaryStyle</title>';
    /*
    <script>
        $(document).ready(function () {
            var id = new URLSearchParams(window.location.search);
            getDatos(11,0,id.get("id"))
            //cargarProducto(10,0,id.get("id"));
        });
    </script>
    */
    View::navigation();
    $idArticulo=$_GET['id'];
    $datosArticulo=DB::execute_sql('SELECT * FROM articulos WHERE articulos.id = ?',array($idArticulo));
    
    echo '
</head>

<body>
<h1 class="tituloproducto">Camiseta Tupac</h1>
    <!-- Usamos bootstrap para el grid -->
    <div class="row camiseta-row">
        <div class="col camiseta-img">';
        foreach($datosArticulo as $result){
        
            $img=View::imgtobase64($result['imagen']);
            echo" <img src='$img' alt='amiseta1' />";
            echo'</div>
        <div class="col camiseta-data">
            <div class="productosetup">
            <form method="POST" action="añadirCarrito.php">
                
                    <p>Talla:</p>
                    <select name="talla">
                        <option value="1">S</option>
                        <option value="2">M</option> 
                        <option value="3">L</option>
                        <option value="4">XL</option>  
                    </select>
                
                
                    <p>Cantidad: </p>
                    <input type="number" name="cantidad" min="1" max="20" step="1" value="1">';

                   echo "<p>Precio:{$result['precio']}€</p>
                   <input type='hidden' name='precio' value='{$result['precio']}'>
                   <input type='hidden' name='id' value='{$result['id']}'>
                   <input type='hidden' name='nombre' value='{$result['nombre']}'>";
                  

               echo"<input type='submit' value='Añadir al Carrito'>";
               echo'</form>
            </div>
        </div>';
        }
        
       echo' 
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <p>Los clientes también compran</p>
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
                <a href="#">Términos y condiciones</a>
            </div>
    
            <div class="footer-copy">
                © 2020 CanaryStyle
            </div>
        </div>
    </footer>

    
</body>
</html> ';
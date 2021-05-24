<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';
echo'
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>CanaryStyle | CHAQUETAS</title>
</head>
<body>';
View::navigation();
$datos = DB::execute_sql('SELECT * FROM articulos WHERE tipo=9');
echo '<h1 class="camisetastitulo">Bikinis</h1>
    <div class="center-camisetas">
        <div class="camisetas">';
        foreach($datos as $bikinismujer){
            $id = $bikinismujer['id'];
            echo '<div class="">';
            echo '<div class="">';  // Esto ya lo fixeas si ta VIVA RUSIA ?DONDE TIENES EL CSS?
                    echo "<div class='main-camiseta' onclick=\"window.location='camisetaHombre.php?id=$id'\">";
                        $img=View::imgtobase64($bikinismujer['imagen']);
                        echo "<img  src='$img' alt='camisetas-img1' /> ";                          
                        echo ' <div class="row marginsetup">
                            <div class="col-8">';
                            echo "<p class='camiseta-title camiseta-text'>{$bikinismujer['nombre']}</p>";
                            echo '</div>
                            <div class="col-4">';
                                echo "<p class='camiseta-price camiseta-text'>{$bikinismujer['precio']}€</p>";
                                echo '
                            </div>
                        </div>     
                    </div>
                </div>
            </div>';

    
    }
    echo'
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
            © 2021 CanaryStyle
        </div>
    </div>
</footer>
<script>
    var interval;
    var fila = 3;
    function myFunction(x) {
        if (x.matches) { // If media query matches
            fila = 1
            
            //cargarCatalogo(1,fila)
        } else {
            fila = 2
            getDatos(9,fila)
            //cargarCatalogo(1,fila)
        }
        getDatos(9,fila)
        interval = setInterval(getDatos, 10000, 1,fila)
    }

    function myFunctionY(y) {
        if (y.matches) { // If media query matches
            fila = 0
            //cargarCatalogo(1,fila)
        } else {
            fila = 1     
            //cargarCatalogo(1,fila)
        }
        getDatos(9,fila)
        interval = setInterval(getDatos, 1,1,fila)
    }
    
    var x = window.matchMedia("(min-width : 890px) and (max-width : 1310px)")
    var y = window.matchMedia("(max-width: 889px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
    myFunctionY(y)
    y.addListener(myFunctionY)   
</script>
</body>
</html>';
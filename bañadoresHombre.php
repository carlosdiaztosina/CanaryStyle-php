<?php
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
<body>
    <header>
        <div class="nav-wrap">
            <div class="nav-block"></div>
            <a href="index.php">
                <img src="images/Captura111.PNG" alt="logo" class="logo">
            </a>
            <a href="index.php" class="logo-name">
                CanaryStyle
            </a>
            <nav>
                <ul>
                    <li><a href="#" class="align">Hombre<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="camisetasHombre.php">Camisetas</a></li>
                            <li><a href="pantalonesHombre.php">Pantalones</a></li>
                            <li><a href="chaquetasHombre.php">Chaquetas</a></li>
                            <li><a href="bañadoresHombre.php">Bañadores</a></li>
                            <li><a href="complementosHombre.php">Complementos</a></li>
                            
                        </ul></li>
                    <li><a href="#" class="align">Mujer<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="camisetasMujer.php">Camisetas</a></li>
                            <li><a href="pantalonesMujer.php">Pantalones</a></li>
                            <li><a href="chaquetasMujer.php">Chaquetas</a></li>
                            <li><a href="bikinisMujer.php">Bikinis</a></li>
                            <li><a href="complementosMujer.php">Complementos</a></li>
                        </ul></li>
                    <li><a href="carrito.php">Carrito</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>    
        <h1 class="camisetastitulo">Bañadores</h1>
        <div class="center-camisetas">
            <div id="bañadoresHombreId" class="camisetas">   
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
            getDatos(4,fila)
            //cargarCatalogo(1,fila)
        }
        getDatos(4,fila)
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
        getDatos(4,fila)
        interval = setInterval(getDatos, 10,1,fila)
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
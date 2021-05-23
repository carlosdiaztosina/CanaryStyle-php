<?php
echo'
<html>
<head>
    <title>Inicio_de_sesion</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="login.js"></script>
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
    </header>
    <div class="contenedor-form">
        <div class="toggle">
            <span>Registrarse</span>
        </div>
        
        <div class="formulario">
            <h1>Iniciar Sesión</h1>
            <form action="" method="post">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
        
        <div class="formulario">
            <h1>Registrarse</h1>
            <form action="" method="post">
                <input type="name" name="name" placeholder="Introduzca su nombre" required>
                <input type="email" name="email" placeholder="Introduzca su Email" required>
                <input type="password" name="password" placeholder="Introduzca una contraseña" required>
                <input type="submit" value="Registrarse">
            </form>
        </div>
    </div>
    <script src="jquery-3.1.1.min.js"></script>    
    <script src="login.js"></script>
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
</body>
</html>';
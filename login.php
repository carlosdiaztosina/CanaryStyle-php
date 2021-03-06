<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';
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
<body>';
View::navigation();
    echo '<div class="contenedor-form">
        <div class="toggle">
            <span>Registrarse</span>
        </div>
        
        <div class="formulario">
            <h1>Iniciar Sesión</h1>
            <form action="comprobarLogin.php" method="post">
                <input type="text" name="cuenta" placeholder="Introduzca cuenta" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
        
        <div class="formulario">
            <h1>Registrarse</h1>
            <form action="comprobarRegistro.php" method="post">
                <input type="text" name="cuenta" placeholder="Introduzca su cuenta" required>
                <input type="text" name="nombre" placeholder="Introduzca su nombre" required>
                <input type="email" name="email" placeholder="Introduzca su Email" required>
                <input type="text" name="direccion" placeholder="Introduzca su dirección" required>
                <input type="number" name="telefono" placeholder="Introduzca su teléfono" required>
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
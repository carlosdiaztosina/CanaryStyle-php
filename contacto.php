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
    <title>CanaryStyle | HOME</title>
</head>
<body>';
View::navigation();
    echo '<div class="wrapper-contacto">
            <section class="form1">
                <h1>Fallo de pedido</h1>
                <form method="POST"> 
                    <label>Nombre Completo</label><br>
                    <input class="nombre" type="text" name="nombre" required autofocus/><br>
                    <label>Email</label><br>
                    <input class="eamil" type="email" name="email" required/><br>
                    <label>Producto</label><br>
                    <input class="Producto" type="text" name="producto" required /><br>
                    <label>Tu mensaje</label><br>
                    <input class="mensaje" type="text" name="mensaje"/><br><br>
                    <input type="button" value="Enviar">
                </form>
                <div>
                    <h2 style="border:0; margin-top: 40px;"> Donde nos encontramos:</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1919.5266457724745!2d-15.45141775950502!3d28.072512269696656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b61a40c00405a46!2sUniversidad%20de%20Las%20Palmas%20de%20Gran%20Canaria%3A%20Escuela%20de%20Ingenier%C3%ADa%20Inform%C3%A1tica!5e0!3m2!1ses!2ses!4v1620641554000!5m2!1ses!2ses" width="450" height="300" style="border:0; margin-top: 10px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
            <section class="contact">
                <h1> Informaci??n del contacto</h1>
                <div>Av juan Carlos I S/N CC Las Ramblas, 35019 Las Palmas de Gran Canaria,</div>
                <div>Nuestro numero de contacto 928 2982982 982</div>
                <div>Abrimos de lunes a viernes de 13:00 a 23:00</div>
                <h1> Redes Sociales </h1>
                <div>
                    Para que estes al dia de la ultima moda <br>
                    Facebook: CanaryStyle <br>
                    Instagram: @canaryStyle <br>
                    Twitter: @canaryStyle
                </div>
            </section>
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
            <a href="#">T??rminos y condiciones</a>
        </div>

        <div class="footer-copy">
            ?? 2021 CanaryStyle
        </div>
    </div>
</footer>
</html>';
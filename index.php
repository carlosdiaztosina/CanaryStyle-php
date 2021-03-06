<?php
include_once 'presentation.class.php';
include_once 'data-access.class.php';

echo '
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CanaryStyle | HOME</title>
</head>
<body>';

    
    $res = DB::execute_sql('SELECT * FROM usuarios');
    $res->setFetchMode(PDO::FETCH_NAMED);
    $datos = $res -> fetchAll();
    View::navigation();
        echo'<div class="portada">
            <img src="images/banner.jpg" alt="portada">
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Nuestros productos más vendidos</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="images/FotosHombres/Camisetas/camiseta1.jpg" alt="art-1">
                </div>
                <div class="col">
                    <img src="images/FotosMujeres/Sudaderas/sudadera6.jpg" alt="art-2">
                </div>
                <div class="col">
                    <img src="images/FotosHombres/Pantalones/pantalon3.jpg" alt="art-3">
                </div>
            </div>
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
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
    
    <title>CanaryStyle</title>
    <script>
        $(document).ready(function () {
            var id = new URLSearchParams(window.location.search);
            getDatos(11,0,id.get("id"))
            //cargarProducto(10,0,id.get("id"));
        });
    </script>
</head>

<body>';
View::navigation();
$datos = DB::execute_sql('SELECT * FROM articulos WHERE tipo=1');
    echo '<h1 class="camisetastitulo">Camisetas</h1>
        <div class="center-camisetas">
            <div class="camisetas">';
        $count = 1;

        foreach($datos as $camisetashombre){
            echo '<div class="row">
                <div class="col">
                    <div class="main-camiseta" >';
                        echo "<img  src='images/FotosHombres/Camisetas/camiseta{$count}.jpg' alt='camisetas-img1' /> ";                          
                        echo ' <div class="row marginsetup">
                            <div class="col-8">';
                            echo "<p class='camiseta-title camiseta-text'>{$camisetasHombre['nombre']}</p>";
                            echo '</div>
                            <div class="col-4">';
                                echo "<p class='camiseta-price camiseta-text'>{$camisetasHombre['precio']}€</p>";
                                echo '
                            </div>
                        </div>     
                    </div>
                </div>
            </div>';
            $count++;
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
                © 2020 CanaryStyle
            </div>
        </div>
    </footer>

    
</body>
</html> ';
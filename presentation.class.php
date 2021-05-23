<?php
include_once 'business.class.php';
class View {
    public static function  start($title){
        $html = "<html lang='eng'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
                <link href='https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap' rel='stylesheet'>
                <link rel='stylesheet' href='style.css'>
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
                <title>$title</title>
            </head>
            <body>";
        User::session_start();
        echo $html;
    }
    public static function imgtobase64($img){
        $b64 = base64_encode($img);
        $signature = substr($b64, 0, 3);
        if ( $signature == '/9j') {
            $mime = 'data:image/jpg;base64,';
        } else if ( $signature == 'iVB') {
            $mime = 'data:image/png;base64,';
        }
        return $mime . $b64;
    }
    public static function navigation(){
        $user = User::getLoggedUser();
        echo '<header>
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
                    ';
                     
        if($user == false) {
            echo '<li><a href="login.php">Login</a></li>';
        } else {
            echo "<li><a href='perfil.php'>Perfil</a></li>";
            echo "<li><a href='logout.php'>Cerrar sesión</a></li>";
           
        }
        echo' </ul>
        </nav>
        </div>
        </header>  ';  
        
    }

    public static function end(){
        echo '</body>
              </html>';
    }
}
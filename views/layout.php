<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&amp;display=swap" rel="stylesheet">

    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

    <link rel="icon" src="">
    <title>Document</title>
</head>
<body class="overflow-x-hidden">

    <div class="row" style="background-color: rgb(22, 21, 21);">
        <div class="col-md-6 d-flex justify-content-around align-items-start lead p-0">
            <div class="d-flex align-items-center">
                <img src="img/logo.png" alt="LOGO" style="max-width: 60px; height: auto; rotate: -90deg;">
                <div class="text-white">ATOMIC STUDIOS</div>
            </div>
            <a class="text-white align-self-center mx-1" href="#">NOTICIAS</a>
            <a class="text-white align-self-center mx-1" href="?section=soporte">SOPORTE</a>
            <a class="text-white align-self-center mx-1" href="?section=torneos">TORNEOS</a>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center p-0">
            <button class="lead rounded border-0" style="height: 30px;  background-color: rgb(36, 34, 34);">INICIAR SESIÓN</button>
            <button class="lead rounded border-0" style="height: 30px; margin: 0px 15px; background-color: rgb(74, 191, 191)">JUEGA YA</button>
        </div>
    </div>
   
    <div class="row position-relative">
        <img src="img/background.png" alt="IMAGE" class="img-fluid p-0" style="filter: blur(4px);">
        <div class="text-center position-absolute top-50 start-50 translate-middle p-0" style="transform: translate(-50%, -50%);">
          <h1 class="text-center text-uppercase font-weight-bold display-1 text-white"><?php echo str_replace("-", " ", $section)?></h1>
          <img src="img/linea.png" class="img-fluid" style="filter: invert(100%);" alt="IMAGE">
        </div>
    </div>

    <div class="container my-4">
        <?php require_once "views/" . $section . ".php"?>
    </div>

    <div class="row d-flex justify-content-evenly align-items-center py-4 lead" style="background-color: rgb(36, 35, 35);">
        <a class="col-sm-2 text-center text-white m-0" href="?section=war-over-ocean-wiki">ACERCA DE WAR OVER OCEAN</a>
        <a class="col-sm-2 text-center text-white m-0">DESARROLLADORES</a>
        <a class="col-sm-2 text-center text-white m-0">PREFERENCIAS DE COOKIES</a>
    </div>

    <div class="d-flex flex-column align-items-center justify-content-cente py-3" style="background-color: rgb(22, 21, 21);">
        
        <div class="d-flex align-items-center">
            <img src="img/logo.png" alt="LOGO" style="width: 60px; height: auto; rotate: -90deg; filter:invert(50%);">
            <div class="text-grey">ATOMIC<br>STUDIOS</div>
        </div>
        
        <p class="text-center" style="font-size: 0.7em">&copy2023 ATOMIC STUDIOS</p>

        <div class="d-flex justify-content-around w-50 py-2">
            <a class="text-white" href="?section=aviso-de-privacidad">AVISO DE PRIVACIDAD</a>
            <a class="text-white" href="?section=terminos-de-servicio">TERMINOS DE SERVICIO</a>
        </div>
        
        <div class="d-flex" style="background-color: rgb(36, 35, 35);">
            <img src="img/clasificacion.png" alt="TEENS ONLY" class="p-1" style="width: 60px;">
            <div style="font-size: 0.8em">
                Referencia al alcohol<br>
                Sangre<br>
                Violencia<br>
                Temas insinuantes moderados<br>
                Interaccion entre usuarios<br>
                Compras integradas
            </div>
        
        </div>
    </div>
    
</body>
</html>
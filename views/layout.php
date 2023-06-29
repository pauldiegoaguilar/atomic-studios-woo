<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">

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

    <div class="row" style="background-color: #1B191B;">
        <div class="col-md-6 d-flex justify-content-around align-items-start lead p-0">
            <div class="d-flex align-self-center mx-1">
                <img src="img/logo.png" alt="LOGO" style="max-width: 60px; height: auto; rotate: -90deg;">
                <div class="text-white align-self-center" style="line-height: 20px;" >ATOMIC<br>STUDIOS</div>
            </div>
            <a class="text-white align-self-center mx-1" href="#" style="text-decoration: none;">NOTICIAS</a>
            <a class="text-white align-self-center mx-1" href="?section=soporte" style="text-decoration: none;">SOPORTE</a>
            <a class="text-white align-self-center mx-1" href="?section=torneos" style="text-decoration: none;">TORNEOS</a>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center p-0">
            <a class="lead rounded border-0 btn-login" href="main2.php?section=login" style="padding: 5px 20px; text-decoration: none; background-color: #2B282C;">INICIAR SESIÓN</a>
            <a class="lead rounded border-0 download" href="includes/installer.txt" download style="padding: 5px 20px; margin: 0px 30px; text-decoration: none; background-color: #7BB0FF">JUEGA YA</a>
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

    <div class="row d-flex justify-content-around align-items-center py-4 lead" style="background-color: #222022;">
        <a class="col-sm-4 text-center text-white p-2" style="text-decoration: none;" href="?section=war-over-ocean-wiki">ACERCA DE WAR OVER OCEAN</a>
        <a class="col-sm-4 text-center text-white p-2" style="text-decoration: none;">DESARROLLADORES</a>
        <a class="col-sm-4 text-center text-white p-2" style="text-decoration: none;">PREFERENCIAS DE COOKIES</a>
    </div>

    <div class="d-flex flex-column align-items-center justify-content-cente py-3" style="background-color: #1B191B; width: 100%;">
        <div class="d-flex flex-column">
            <div class="d-flex align-self-center">
                <img src="img/logo.png" alt="LOGO" style="max-width: 60px; height: auto; rotate: -90deg; filter:invert(50%);">
                <div class="text-grey align-self-center" style="line-height: 15px; margin-right: 5px;" >ATOMIC<br>STUDIOS</div>
            </div>
            <p class="text-center" style="font-size: 15px">&copy 2023 Atomic Studios</p>
        </div>
        <div class="d-flex justify-content-center w-50 py-2" style="margin: 20px 0;">
            <a class="text-white text-center lead" href="?section=aviso-de-privacidad" style="margin-left: 25px; margin-right: 25px; text-decoration: none;">AVISO DE PRIVACIDAD</a>
            <a class="text-white text-center lead" href="?section=terminos-de-servicio" style="margin-left: 25px; margin-right: 25px; text-decoration: none;">TERMINOS DE SERVICIO</a>
        </div>
        <div class="d-flex py-2 px-2" style="background-color: #222022; margin-bottom: 25px;">
            <img src="img/clasificacion.png" alt="TEENS ONLY" style="width: 90px; margin-right: 10px;">
            <div class="text-white align-self-center" style="font-size: 0.8em">
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
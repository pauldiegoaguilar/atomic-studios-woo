<!DOCTYPE html>
<html lang="es">

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

    <link rel="shortcut icon" href="img/icon.png">
    <title>Atomic Studios • <?php echo ucwords(str_replace("-", " ", $section)) ?></title>
</head>

<body>

    <div class="row w-100 m-0" style="background-color: #1B191B;">
        <a class="col-sm-4 col-md-3 col-lg-2 d-flex homewoo align-self-center mt-1" href="?section=war-over-ocean" style="text-decoration: none;">
            <img src="img/logo.png" class="col-sm-6 d-none d-sm-block" alt="LOGO" style="rotate: -90deg;">
            <div class="col-12 col-sm-6 col-sm text-sm-start text-center text-white align-self-center fs-3 lh-1 mt-1">ATOMIC <br class="d-none d-sm-block">STUDIOS</div>
        </a>
        <hr class="d-block d-sm-none w-75 m-0 mx-auto mt-2"> 
        <div class="row col-sm-8 col-md-9 col-lg-10">
            <div class="col-lg-6 d-flex justify-content-around align-items-start lead fs-3">
                <a class="links lnav text-white align-self-center" href="?section=noticias" style="text-decoration: none;">NOTICIAS</a>
                <a class="links lnav text-white align-self-center" href="?section=soporte" style="text-decoration: none;">SOPORTE</a>
                <a class="links lnav text-white align-self-center" href="?section=torneos" style="text-decoration: none;">TORNEOS</a>
            </div>
            <div class="col-lg-6 d-flex justify-content-around justify-content-lg-end align-items-center text-center p-0 fs-3">
                <a class="lead rounded border-0 btn-login p-2 m-2" href="main2.php?section=login" style="text-decoration: none; background-color: #2B282C;">INICIAR SESIÓN</a>
                <a class="lead rounded border-0 download p-2 m-2" href="includes/installer.txt" download style="text-decoration: none; background-color: #7BB0FF">JUEGA YA</a>
            </div>
        </div>
    </div>

    <?php
    if ($section != 'war-over-ocean') { ?>
        <div class="row position-relative w-100 m-0">
            <img src="img/background.png" alt="IMAGE" class="img-fluid p-0" style="filter: blur(4px);">
            <div class="text-center position-absolute top-50 start-50 translate-middle p-0" style="transform: translate(-50%, -50%);">
                <h1 class="text-center text-uppercase font-weight-bold display-1 text-white"><?php echo str_replace("-", " ", $section) ?></h1>
                <img src="img/linea.png" class="img-fluid" style="filter: invert(100%);" alt="IMAGE">
            </div>
        </div>

        <div class="container my-4">
            <?php require_once "views/" . $section . ".php" ?>
        </div>
    <?php
    } else {
        require_once "views/" . $section . ".php";
    } ?>

    <div class="row w-100 m-0 d-flex justify-content-around align-items-center py-4 lead" style="background-color: #222022;">
        <a class="links col-sm-4 text-center text-white p-2" style="text-decoration: none;" href="?section=acerca-de-woo">ACERCA DE WAR OVER OCEAN</a>
        <a class="links col-sm-4 text-center text-white p-2" style="text-decoration: none;" href="?section=desarrolladores">DESARROLLADORES</a>
        <a class="links col-sm-4 text-center text-white p-2" style="text-decoration: none;">PREFERENCIAS DE COOKIES</a>
    </div>

    <div class="d-flex flex-column align-items-center justify-content-center py-3" style="background-color: #1B191B;">
        <div class="d-flex flex-column">
            <div class="d-flex align-self-center">
                <img src="img/logo.png" alt="LOGO" style="max-width: 60px; height: auto; rotate: -90deg; filter:invert(50%);">
                <div class="text-grey align-self-center" style="line-height: 15px; margin-right: 5px;">ATOMIC<br>STUDIOS</div>
            </div>
            <p class="text-center" style="font-size: 15px">&copy 2023 Atomic Studios</p>
        </div>
        <div class="d-flex justify-content-center w-50 py-2" style="margin: 20px 0;">
            <a class="links text-white text-center lead" href="?section=aviso-de-privacidad" style="margin-left: 25px; margin-right: 25px; text-decoration: none;">AVISO DE PRIVACIDAD</a>
            <a class="links text-white text-center lead" href="?section=terminos-de-servicio" style="margin-left: 25px; margin-right: 25px; text-decoration: none;">TERMINOS DE SERVICIO</a>
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
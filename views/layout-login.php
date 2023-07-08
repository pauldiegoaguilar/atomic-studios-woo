<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/scriptsLogin.js"></script>
    <!-- TITLE -->
    <link rel="shortcut icon" href="img/icon.png">
    <title>Atomic Studios • <?php echo ucfirst(str_replace("-", " ", $section)) ?></title>
</head>

<body>
    
    <div class="img-fluid bg-image"></div>

    <div class="homewoo d-flex align-items-center" style="cursor:pointer;" onclick="location.assign('index.php');">
        <img style="max-width: 6em; rotate: -90deg;" src="img/logo.png" alt="Atomic Studios">
        <p class="text-white fs-2 m-0 lh-1" style="z-index: 1;">ATOMIC<br>STUDIOS</p>
    </div>
  
    <section class="container d-flex align-items-center justify-content-center w-75 my-5">

        <?php require_once "views/" . $section . ".php" ?>

    </section>

    <div class="w-50 d-flex flex-column mt-3 fixed-bottom d-none d-lg-flex">
        <div class="d-flex flex-wrap" style="z-index: 1;">
            <a class="homewoo text-center text-white fs-6 px-2" style="text-decoration: none;" href="main.php?section=soporte">SOPORTE</a>
            <a class="homewoo text-center text-white fs-6 px-2" style="text-decoration: none;" href="main.php?section=aviso-de-privacidad">AVISO DE PRIVACIDAD</a>
            <a class="homewoo text-center text-white fs-6 px-2" style="text-decoration: none;" href="main.php?section=terminos-de-servicio">TERMINOS DE SERVICIO</a>
        </div>
        <small style="z-index: 1;" class="text-white mt-2 ps-2">&copy 2023 ATOMIC STUDIOS. TODOS LOS DERECHOS RESERVADOS</small>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous">
</script>

</html>
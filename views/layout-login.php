<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scriptsLogin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>Atomic Studios • <?php echo ucfirst(str_replace("-", " ", $section)) ?></title>
</head>

<body>

    <div class="atomic">
        <img class="logo" src="img/logo.png" alt="">
        <h1> ATOMIC </h1>
        <h1 class="stu"> STUDIOS </h1>
    </div>

    <div class="extras">
        <a style="text-decoration: none; color: white;" href="main.php?section=soporte">SOPORTE</a>
        <a style="text-decoration: none; color: white;" href="main.php?section=aviso-de-privacidad">AVISO DE PRIVACIDAD</a>
        <a style="text-decoration: none; color: white;" href="main.php?section=terminos-de-servicio">TERMINOS DE SERVICIO</a>
        <a style="text-decoration: none; color: white;" href="#">PREFERENCIA DE COOKIES</a>
    </div>

    <h1 class="copy" style="font-size: 13.5px; color: white;">© 2023 ATOMIC STUDIOS. TODOS LOS DERECHOS RESERVADOS.</h1>

    <div class="bg-image"></div>

    <!-- Contenido cambiador xd -->
    <?php require_once "views/" . $section . ".php" ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous">
</script>

</html>
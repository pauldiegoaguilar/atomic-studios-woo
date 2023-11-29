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

    <?php 
    if(file_exists('includes/languages/' . $_GET['la'] . '.ini')){
        $lang = parse_ini_file('includes/languages/' . $_GET['la'] . '.ini', true, INI_SCANNER_RAW);
    } else{
        header('Location: index.php');
    }?>

    <div class="bg-image" stlye="z-index: -1;"></div>

    <div class="d-flex align-items-center" style="position: fixed; top: 0; left: 0; z-index: 1030;">
        <div class="homewoo d-flex align-items-center" onclick="location.assign('index.php');">
            <img style="cursor: pointer; max-width: 6em; rotate: -90deg;" src="img/logo.png" alt="Atomic Studios" class="customLogo">
            <p class="d-none d-sm-block text-white fs-2 m-0 lh-1" style="cursor: pointer; z-index: 1;">ATOMIC<br>STUDIOS</p>
        </div>
    </div>
  

    <div class="d-flex align-items-center" style="height: 100vh;">
        <section class="d-flex justify-content-center w-100">

            <?php require_once "views/" . $section . ".php" ?>

        </section>
    </div>

    <div class="w-50 d-flex flex-column mt-3 fixed-bottom d-none d-lg-flex">
        <div class="d-flex flex-wrap" style="z-index: 1;">
            <a class="homewoo text-center text-white fs-6 px-2" style="text-decoration: none;" href="main.php?section=soporte&la=<?php echo $_GET['la']?>"><?php echo $lang['navBottom']['s']?></a>
            <a class="homewoo text-center text-white fs-6 px-2" style="text-decoration: none;" href="main.php?section=aviso-de-privacidad&la=<?php echo $_GET['la']?>"><?php echo $lang['footer']['a']?></a>
            <a class="homewoo text-center text-white fs-6 px-2" style="text-decoration: none;" href="main.php?section=terminos-de-servicio&la=<?php echo $_GET['la']?>"><?php echo $lang['footer']['te']?></a>
        </div>
        <small style="z-index: 1;" class="text-white mt-2 ps-2">&copy 2023 ATOMIC STUDIOS. <?php echo $lang['footer']['t']?></small>
    </div>
    
    <div class="w-100 d-flex flex-column align-items-end mt-3 fixed-bottom">
        <div class="dropdown dropstart">
            <button class="btn btn-sm" type="button" style="border: none;" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/language.png" alt="lang-icon" style="width: 30px; cursor: pointer;">
            </button>
            <ul class="dropdown-menu p-2" style="background-color: #ffffff; border-right: 4px solid #7BB0FF; border-left: none; border-top: none; border-bottom: none;">
                <li><a class="dropdown-item text-black opl" onclick="switchLan('<?php echo 'eng'; /*$_GET['la']*/?>')"><?php echo $lang['nav']['esp']?></a></li>
                <li><hr class="dropdown-divider" style="color: #878787;"></li>
                <li><a class="dropdown-item text-black opl" onclick="switchLan('<?php echo 'esp'; /*$_GET['la']*/?>')"><?php echo $lang['nav']['en']?></a></li>
            </ul>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous">
</script>

</html>
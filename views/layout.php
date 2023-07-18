<?php
    require_once 'includes/config.php';
    
    require_once 'modelos/current-user.php';
?>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <link rel="shortcut icon" href="img/icon.png">
    <title>Atomic Studios • <?php echo ucwords(str_replace("-", " ", $section)) ?></title>
</head>

<body>
    
    <?php $lang = parse_ini_file('includes/languages/' . $_GET['la'] . '.ini', true, INI_SCANNER_RAW);?>

    <div class="row w-100 m-0" style="background-color: #1B191B;">
        <a class="col-sm-4 col-md-3 col-lg-2 d-flex homewoo align-self-center mt-1" href="?section=war-over-ocean&la=<?php echo $_GET['la']?>" style="text-decoration: none;">
            <img src="img/logo.png" class="col-sm-6 d-none d-sm-block" alt="LOGO" style="rotate: -90deg;">
            <div class="col-12 col-sm-6 text-sm-start text-center text-white align-self-center fs-3 lh-1 mt-1">ATOMIC <br class='d-none d-sm-block'>STUDIOS</div>
        </a>
        <hr class="d-block d-sm-none w-75 m-0 mx-auto mt-2"> 
        <div class="row col-sm-8 col-md-9 col-lg-10">
            <div class="col-lg-6 d-flex justify-content-around align-items-start lead fs-3">
                <a class="links lnav text-white align-self-center" href="?section=noticias&la=<?php echo $_GET['la']?>" style="text-decoration: none;"><?php echo $lang['nav']['n']?></a>
                <a class="links lnav text-white align-self-center" href="?section=soporte&la=<?php echo $_GET['la']?>" style="text-decoration: none;"><?php echo $lang['nav']['s']?></a>
                <a class="links lnav text-white align-self-center" href="?section=torneos&la=<?php echo $_GET['la']?>" style="text-decoration: none;"><?php echo $lang['nav']['t']?></a>
            </div>
            <div class="col-lg-6 d-flex justify-content-around justify-content-lg-end align-items-center text-center p-0">
                <div class="dropdown-center">
                    <button class="btn btn-sm" type="button" style="border: none;" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                        <img src="img/language.png" alt="lang-icon" style="width: 30px; cursor: pointer;">
                    </button>
                    <ul class="dropdown-menu p-2" style="background-color: #ffffff; border-top: 4px solid #7BB0FF; border-left: none; border-right: none; border-bottom: none;">
                        <li><a class="dropdown-item text-black opl" onclick="switchLan('<?php echo 'eng'; /*$_GET['la']*/?>')">Español</a></li>
                        <li><hr class="dropdown-divider" style="color: #878787;"></li>
                        <li><a class="dropdown-item text-black opl" onclick="switchLan('<?php echo 'esp'; /*$_GET['la']*/?>')">Ingles</a></li>
                    </ul>
                </div>
            <?php
                if(isset($user)){ ?>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" style="background-color: #2c2c2c; border-color: transparent;" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                            <?php echo $user['nombre']; ?>
                        </button>
                        <ul class="dropdown-menu p-2" style="background-color: #2c2c2c; border-top: 4px solid #7BB0FF;">
                            <li><a class="dropdown-item op" download href="includes/installer.txt">Descargar</a></li>
                            <li><hr class="dropdown-divider" style="background-color: grey;"></li>
                            <li><a class="dropdown-item op" href="#">Administracion</a></li>
                            <li><hr class="dropdown-divider" style="background-color: grey;"></li>
                            <li><a class="dropdown-item op" href="modelos/logout.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>

            <?php }else{ ?>
                <a class="lead rounded border-0 btn-login p-2 m-2 fs-4" href="main2.php?section=login&la=<?php echo $_GET['la']?>" style="text-decoration: none; background-color: #2B282C;"><?php echo $lang['nav']['i']?></a>
                <a class="lead rounded border-0 download p-2 m-2 fs-4" href="includes/installer.txt" download style="text-decoration: none; background-color: #7BB0FF"><?php echo $lang['nav']['j']?></a>
            <?php } ?>
            </div>
        </div>
    </div>

    <?php
    if ($section != 'war-over-ocean') { ?>
        <div class="row position-relative w-100 m-0">
            <img src="img/background.png" alt="IMAGE" class="img-fluid p-0" style="filter: blur(4px);">
            <div class="text-center position-absolute top-50 start-50 translate-middle p-0" style="transform: translate(-50%, -50%);">
                <h1 class="text-center text-uppercase font-weight-bold display-1 text-white"><?php echo $lang[str_replace("-", " ", $section)]['title']?></h1>
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
        <a class="links col-sm-4 text-center text-white p-2" style="text-decoration: none;" href="?section=acerca-de-woo&la=<?php echo $_GET['la']?>"><?php echo $lang['navBottom']['a']?></a>
        <a class="links col-sm-4 text-center text-white p-2" style="text-decoration: none;" href="?section=desarrolladores&la=<?php echo $_GET['la']?>"><?php echo $lang['navBottom']['d']?></a>
        <a class="links col-sm-4 text-center text-white p-2" style="text-decoration: none; cursor: pointer;" onclick="$('#preferencesMenu').css({'display': 'flex'});"><?php echo $lang['navBottom']['p']?></a>
    </div>

    <div id="preferencesMenu" class="fixed-top justify-content-end" style="z-index: 1030; background-color: #242424aa; height: 100vh; display: none;">
        <div class="d-flex flex-column bg-white text-dark p-3 overflow-auto" style="max-width: 400px; position: relative; ">
            <div class="d-flex justify-content-between">
                <h4 class="mb-4">Preferencias de almacenamiento</h4>
                <button type="button" class="btn btn-dark btn-sm mb-4" onclick="$('#preferencesMenu').css({'display': 'none'});">X</button>
            </div>
            <div>
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsa laudantium, quod quisquam cupiditate, ea fuga consequuntur reiciendis nostrum nulla soluta illum ab alias sequi harum labore asperiores pariatur explicabo.</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Lorem ipsum</label> -->
                </div>
            </div>
            <hr>
            <div>
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsa laudantium, quod quisquam cupiditate, ea fuga consequuntur reiciendis nostrum nulla soluta illum ab alias sequi harum labore asperiores pariatur explicabo.</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Lorem ipsum</label> -->
                </div>
            </div>
            <hr style="color: black;">
            <div>
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsa laudantium, quod quisquam cupiditate, ea fuga consequuntur reiciendis nostrum nulla soluta illum ab alias sequi harum labore asperiores pariatur explicabo.</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Lorem ipsum</label> -->
                </div>
            </div>
            <hr style="color: black;">
            <div>
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsa laudantium, quod quisquam cupiditate, ea fuga consequuntur reiciendis nostrum nulla soluta illum ab alias sequi harum labore asperiores pariatur explicabo.</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Lorem ipsum</label> -->
                </div>
            </div>
        </div>
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
            <a class="links text-white text-center lead" href="?section=aviso-de-privacidad&la=<?php echo $_GET['la']?>" style="margin-left: 25px; margin-right: 25px; text-decoration: none;"><?php echo $lang['footer']['a']?></a>
            <a class="links text-white text-center lead" href="?section=terminos-de-servicio&la=<?php echo $_GET['la']?>" style="margin-left: 25px; margin-right: 25px; text-decoration: none;"><?php echo $lang['footer']['te']?></a>
        </div>
        <div class="d-flex py-2 px-2" style="background-color: #222022; margin-bottom: 25px;">
            <img src="img/clasificacion.png" alt="TEENS ONLY" style="width: 90px; margin-right: 10px;">
            <div class="text-white align-self-center" style="font-size: 0.8em">
                <?php echo $lang['footer']['txt']?>
            </div>
        </div>
    </div>
</body>

</html>
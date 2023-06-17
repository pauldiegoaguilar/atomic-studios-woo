<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" src="">
    <title>Document</title>
</head>
<body>
    <div class="nav-bar">
        <div>
            <p>ATOMIC STUDIOS</p>
            <p>NOTICIAS</p>
            <p>SOPORTE</p>
            <p>TORNEOS</p>
        </div>
        <div>
            <button>INICIAR SESION</button>
            <button>JUEGA YA</button>
        </div>
    </div>

    <div class="imagen-default">
        <img src="img/background.png">
        <div class="imgdef-texto">
            <p><?php echo str_replace("-", "&nbsp;", $section)?></p>
            <img src="img/linea.png">
        </div>
    </div>

    <div class="main-container">
        <?php require_once "views/" . $section . ".php"?>
    </div>

    <div class="bar">
        <p>Qué es WAR OVER OCEAN?</p>
        <p>DESARROLLADORES</p>
        <p>PREFERENCIAS DE COOKIES</p>
    </div>
    
</body>
</html>
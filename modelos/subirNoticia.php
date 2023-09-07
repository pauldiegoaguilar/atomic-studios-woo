<?php
    session_start();
    require_once "../includes/config.php";

    if(!isset($_SESSION['user_id']) || !$_SESSION['esMod']){
        session_unset();
        session_destroy();
        
        header('Location: index.php');
    }

    $tit = nl2br($_POST['newTitle']);
    $body = nl2br($_POST['newBody']);
    $list = nl2br($_POST['listText']);
    $lang = nl2br($_POST['la']);

    $getLa = array('esp' => 'eng', 'eng' => 'esp');
    $rutaDbFormat = [];

    for ($i = 0; $i < count($_FILES['fileSelector']['name']); $i++) {
        $nombre = $_FILES['fileSelector']['name'][$i];
        $temporal = $_FILES['fileSelector']['tmp_name'][$i];
        $error = $_FILES['fileSelector']['error'][$i];

        if($error < 3){
            move_uploaded_file($temporal, '../img/' . $nombre);
            $rutaDbFormat[$i] = 'img/' . $nombre;
        } else{
            die('Error en la subida de archivos, comuniquese con soporte <br><br>');
        }
    }

    $rutas = implode(',', $rutaDbFormat);
    $prSql = "INSERT INTO noticias VALUES ('', ?, ?, ?, ?, NOW(), ?)";
    $prQry = mysqli_stmt_init($conn);

    if(mysqli_stmt_prepare($prQry, $prSql)){
        mysqli_stmt_bind_param($prQry, "sssss", $tit, $body, $list, $lang, $rutas);
        mysqli_stmt_execute($prQry);
        mysqli_stmt_close($prQry);
    } else{
        die('Error: No se preparó la consulta. Contactar con soporte si el error persiste');
    }

    header("Location: ../main.php?section=crear-noticia&la=" . $getLa[$lang]);
?>
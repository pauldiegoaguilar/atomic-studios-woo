<?php
    require_once "../includes/config.php";
    
    session_start();

    if(!isset($_SESSION['user_id']) || !$_SESSION['esMod']){
        session_unset();
        session_destroy();

        header('Location: ../index.php');
    }

    $id = $_GET['id'];
    $option = $_GET['op'];
    $usData = strip_tags(mysqli_real_escape_string($conn, $_GET['user']));

    $sqlOptions = array(
                        "ban" => "UPDATE usuarios SET usuarios.fecha_baja = NOW() WHERE usuarios.id = $id",
                        "unBan" => "UPDATE usuarios SET usuarios.fecha_baja = NULL WHERE usuarios.id = $id",
                        "desc" => "UPDATE usuarios SET usuarios.descripcion = '".$usData."' WHERE usuarios.id = $id",
                    );

    $qry = mysqli_query($conn, $sqlOptions[$option]);

    if(!$qry){
        header('HTTP/1.1 500 Internal Server Error');
    }
?>
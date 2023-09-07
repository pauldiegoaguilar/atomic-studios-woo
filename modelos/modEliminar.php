<?php
    require_once "../includes/config.php";
    session_start();

    if(!isset($_SESSION['user_id']) || !$_SESSION['esMod']){
        session_unset();
        session_destroy();
        header('Location: index.php');
    }

    if($_GET['del']){
    
        $id = $_GET['id'];

        $sql = "UPDATE usuarios SET usuarios.fecha_baja = NOW() WHERE usuarios.id = $id";
        
        $qry = mysqli_query($conn, $sql);

        if(!$qry){
            header('HTTP/1.1 500 Internal Server Error');
        }
    } else{
        $id = $_GET['id'];

        $sql = "UPDATE usuarios SET usuarios.fecha_baja = NULL WHERE usuarios.id = $id";
        
        $qry = mysqli_query($conn, $sql);

        if(!$qry){
            header('HTTP/1.1 500 Internal Server Error');
        }
    }
?>
<?php
    require_once "../includes/config.php";

    session_start();

    if(empty($_SESSION) || !$_SESSION['esMod']){
        session_unset();
        session_destroy();

        header('Location: ../index.php');
    }

    $id = $_POST['id'];
    $la = $_POST['la'];
    $sql = "DELETE FROM noticias WHERE id = '".$id."'";
    $qry = mysqli_query($conn, $sql);

    if(!$qry){
        die('Error: ' . mysqli_error($conn));
        exit;
    }

    header('Location: ../main.php?section=noticias&la='.$la);
?>
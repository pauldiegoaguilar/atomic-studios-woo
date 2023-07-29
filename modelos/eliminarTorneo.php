<?php
    require_once "../includes/config.php";

    $torneo = $_GET['id'];
    $qry = mysqli_query($conn, "DELETE FROM torneos WHERE id = " . $torneo);
    
    if(!$qry){
        die('Error de consulta: ' . mysqli_error($conn));
    }

    header('Location: ../main.php?section=torneos&la=' . $_GET['la']);
?>
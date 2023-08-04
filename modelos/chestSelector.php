<?php
    require_once "../includes/config.php";

    $qry = mysqli_query($conn, "SELECT id, nombre FROM cofres");
    
    if(!$qry){
        die('Error de conexion' . mysqli_error($conn));
    }
    
    $json = json_encode(mysqli_fetch_all($qry, MYSQLI_ASSOC));
    echo $json;

    exit();
?>
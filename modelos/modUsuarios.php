<?php
    if(!isset($_SESSION['user_id']) || !$_SESSION['esMod']){
        die("Error 404: Not found");
    }

    $sql = "SELECT id, nombre, email, clave, genero, monedas, descripcion, fecha_alta, fecha_baja FROM usuarios";
    
    $qry = mysqli_query($conn, $sql);

    if(!$qry){
        die("Error de Consulta: " . mysqli_error($conn));
    }

    $headers = mysqli_fetch_fields($qry);
    $rows = mysqli_fetch_all($qry, MYSQLI_ASSOC);
?>
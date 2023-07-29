<?php
    if($noticias = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM noticias WHERE idioma = '" . $_GET['la'] . "'"), MYSQLI_ASSOC)){
    } else{
        die('Error de consulta, contactar con soporte: ' . mysqli_error($conn));
    }
?>
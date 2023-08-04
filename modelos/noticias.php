<?php

    if($resNews = mysqli_query($conn, "SELECT * FROM noticias WHERE idioma = '" . $_GET['la'] . "' ORDER BY id DESC")){
        $noticias = mysqli_fetch_all($resNews, MYSQLI_ASSOC);
    } else{
        die('Error de consulta, contactar con soporte: ' . mysqli_error($conn));
    }
?>
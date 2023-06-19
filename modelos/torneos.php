<?php
    $query = mysqli_query($conn, "SELECT * FROM torneos ORDER BY id DESC");

    if(!$query){
        die('Hubo un error en la consulta' . mysqli_error($conn));
    }

    $torneosInfo = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
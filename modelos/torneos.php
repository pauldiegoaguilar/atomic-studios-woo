<?php
    $sql = "SELECT  torneos.*, 
                    usuarios.fotoPerfil, 
                    usuarios.nombre as userName,
                    cofres.nombre
                    FROM torneos 
                        LEFT JOIN usuarios ON usuarios.id = torneos.campeon_id 
                        INNER JOIN cofres on cofres.id = torneos.cofre_id
                    WHERE idioma = '" . $_GET['la'] . "'
                    ORDER BY id DESC;";
    
    $query = mysqli_query($conn, $sql);

    if(!$query){
        die('Hubo un error en la consulta: ' . mysqli_error($conn));
    }

    $torneosInfo = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
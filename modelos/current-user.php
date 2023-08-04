<?php
    session_start();

    $user = '';

    if (isset($_SESSION['user_id'])) {
        $qryUser = "SELECT id, nombre, email, esMod FROM usuarios WHERE id = " . $_SESSION['user_id'] . ";";
        $resUser = mysqli_query($conn, $qryUser);

        if(!$resUser){
            die(mysqli_error($conn));
        }

        $user = mysqli_fetch_assoc($resUser);
    }
?>
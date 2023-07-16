<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        $qryUser = "SELECT id, nombre, email FROM usuarios WHERE id = " . $_SESSION['user_id'] . ";";
        $resUser = mysqli_query($conn, $qryUser);

        if(!$resUser){
            die(mysqli_error($conn));
        }

        if (mysqli_num_rows($resUser) > 0) {
            $user = mysqli_fetch_assoc($resUser);
        }
    }
?>
<?php
    require_once "../includes/config.php";

    $email = mysqli_real_escape_string($conn, $_POST["emailL"]);
    $contra = mysqli_real_escape_string($conn, $_POST["passL"]);
    
    $sql = "SELECT id, nombre FROM usuarios WHERE email = '$email' AND clave = '$contra'";
    $qry = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($qry);
    $validation = mysqli_num_rows($qry);

    if($validation > 0){
        session_start();

        $_SESSION['user_id'] = $user['id'];
        echo $user['nombre'];
        return;
    }else{
        echo '';
        return;
    }
?>
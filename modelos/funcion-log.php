<?php
    require_once "../includes/config.php";

    $email = mysqli_real_escape_string($conn, $_POST["emailL"]);
    $contra = mysqli_real_escape_string($conn, $_POST["passL"]);
    $remind = mysqli_real_escape_string($conn, $_POST["remindL"]);
    
    $sql = "SELECT id, nombre FROM usuarios WHERE email = '$email' AND clave = '$contra'";
    $qry = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($qry);
    $validation = mysqli_num_rows($qry);

    if($validation > 0){
        if($remind == "SI"){
            setcookie('email', $email, time() + (86400 * 30), "/"); // expira en 30 dias, de querer al default cambiar 3er parametro a 0
            setcookie('pass', $contra, time() + (86400 * 30), "/"); // el 4to parametro indica que la ruta en la que estara disponible, como esta / significa en todo el dominio
            setcookie('remind', 'checked', time() + (86400 * 30), "/");
        }else{
            setcookie('email', '', 1, '/');
            setcookie('pass', '', 1, '/');
            setcookie('remind', '', 1, '/');
            unset($_COOKIE);
        }

        session_start();

        $_SESSION['user_id'] = $user['id'];
        echo $user['nombre'];
        return;
    }else{
        echo '';
        return;
    }
?>
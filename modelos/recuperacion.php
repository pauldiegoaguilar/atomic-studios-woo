<?php 
    require_once "../includes/config.php";
    
    $mail = mysqli_real_escape_string($conn, $_POST['email']);

    $qry = mysqli_query($conn, "SELECT email FROM usuarios WHERE email = '" . $mail . "'");

    if (!$qry) {
        die('Error de conexión: ' . mysqli_error($conn));
    }
    
    $reg = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    $respuesta = !empty($reg);

    if ($respuesta) {

        $qryU = mysqli_query($conn, "UPDATE codigos SET fecha_baja = NOW() WHERE mail = '" . $mail . "' AND fecha_baja IS NULL"); //Antiguo codigo expira
        
        if (!$qryU) {
            die('Error de conexión: ' . mysqli_error($conn));
        }

        $code = random_int(100000, 999999);

        $qryI = mysqli_query($conn, "INSERT INTO codigos VALUES(NULL, '" . $mail . "', $code, NOW(), NULL)"); //Genera nuevo codigo
        
        if (!$qryI) {
            die('Error de conexión: ' . mysqli_error($conn));
        }

        session_start();
        $_SESSION['mail'] = $mail;
        $_SESSION['code'] = $code;

        echo $respuesta;
    } else {
        echo $respuesta;
    }
?>
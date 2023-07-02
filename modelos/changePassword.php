<?php
    require_once "../includes/config.php";
    session_start();

    $clave = mysqli_real_escape_string($conn, $_POST['pass']);
    $mail = $_SESSION['mail'];
    $sql = "UPDATE usuarios SET clave = '" . $clave . "' WHERE email = '" . $mail . "'";
    
    $qry = mysqli_query($conn, $sql);
    if (!$qry) {
        die('Error de conexión: ' . mysqli_error($conn));
    }
    
    session_unset();
    session_destroy();
?>
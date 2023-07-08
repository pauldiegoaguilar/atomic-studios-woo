<?php
    require_once "../includes/config.php";
    
    session_start();

    $mail = $_SESSION['mail'];
    $code = $_POST['codigo'];

    if($_SESSION['code'] == $code){
        $_SESSION['code'] = '';
        $sql = "UPDATE codigos SET fecha_baja = NOW() WHERE mail = '" . $mail . "' AND fecha_baja IS NULL"; 
        $qry = mysqli_query($conn, $sql); 

        if(!$qry){
            die('Error Consulta: ' . mysqli_error($conn));
        }
        echo "1";
    }
    else{
        echo "";
    }
?>
<?php
    require_once "../includes/config.php";
    
    session_start();

    $mail = $_SESSION['mail'];
    $code = $_POST['codigo'];
    $dateS = $_SESSION['date'];
    $now = date('Y-m-d H:i:s');

    function queryF($c, $m){
        $sql = "UPDATE codigos SET fecha_baja = NOW() WHERE mail = '" . $m . "' AND fecha_baja IS NULL"; 
        $qry = mysqli_query($c, $sql); 

        if(!$qry){
            die('Error Consulta: ' . mysqli_error($c));
        }
    }

    $json = array(
            'msg' => '',
            'access' => 0, 
            );

    if($_SESSION['code'] == $code){

        if(date('Y-m-d H:i:s', strtotime($dateS . '+15 minutes')) <= $now){
            queryF($conn, $mail);

            $json['msg'] = 'Error: El codigo ha deprecado';
            echo json_encode($json);
        }
        else{
            $_SESSION['date'] = strtotime($dateS . '+16 minutes');
            queryF($conn, $mail);

            $json['msg'] = $code;
            $json['access'] = 1;
            echo json_encode($json);
        }
    }
    else{
        $json['msg'] = 'Error: Codigo incorrecto';
        echo json_encode($json);
    }
?>
<?php
    session_start();

    //  Requires
    use \PHPMailer\PHPMailer\PHPMailer;
    use \PHPMailer\PHPMailer\Exception;
    require '../includes/PHPMailer/Exception.php';
    require '../includes/PHPMailer/PHPMailer.php';
    require '../includes/PHPMailer/SMTP.php';
    require '../includes/config.php';

    $clave = $_SESSION['code'];
    $destinatario = $_SESSION['mail'];

    /*comienzo phpmailer */
    $mail = new PHPMailer(true);
       
    try {
        //configuracion para el server
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'waroverocean@gmail.com';
        $mail->Password   =  'cpzrfkvzdjdzkupy';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->setFrom('waroverocean@gmail.com', 'Atomic Studios');
        $mail->addAddress($destinatario);
        /*comienzo del cuerpo del html */
        $mail->isHTML(true);
        $mail->Subject = "Restablecer Clave de War Over Ocean" . "\r\n";
        $mail->Body    = '<html><body<div style="
        position: absolute; 
        left:30%; 
        font-family: "calibri";
        background-color: #070707cc;
        border: 1px solid #070707;
        border-radius:10px;
        padding:10px;
        color:white;
        ">
        <img src="../img/over_ocean.jpg" width="100px" height="100px">
        <h3>Hola<br>
        <br>
        Recibimos una solicitud para restablecer tu clave<br>
        Ingresa el siguiente codigo para restablecer la clave:<br>
        <br>
        <span style="border: 1px solid #00bbff;background-color:#00bbff38;padding:10px 20px; border-radius: 10px;">'.$clave.'</span>
        </h3>Si no quieres cambiar la clave, simplemente ignore este correo.<br>Atte.: <b>Atomic Studios Staff<b></div></body></html>';
    
        $mail->send();
        echo "1";
    } catch (Exception $e) {
        echo "";
    }
?>
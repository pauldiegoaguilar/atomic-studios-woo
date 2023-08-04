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
        $mail->Body    = '<html>
        <body>
            <div style="max-width: 600px; margin: 0 auto; background-color: #222022; font-family: Arial, Helvetica, sans-serif;">
                <table style="width: 100%;">
                    <thead>
                        <tr>
                            <td align="center">
                                <div style="margin-top: 50px;">
                                    <img style="width: 100px; border-radius: 100%;" src="http://drive.google.com/uc?export=view&id=12rYOeeVvNtSVFFmJW-edn8sbFpgVRIRU" alt="logo">
                                    <h2 style="font-weight: 100; font-size: 30px; color: #f4f4f4;">Código de recuperión de cuenta</h2>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">
                                <div style="width: 456px; background-color: #2B282C; padding: 10px 0;">
                                    <div style="width: 400px;">
                                        <h5 style="font-weight: 100; font-size: 20px; color: #d1d1d1;">Este es tu código de aprobación de recuperión de cuenta:</h5>
                                        <h1 style="font-weight: 100; font-size: 35px; color: #f4f4f4; letter-spacing: 10px;">' . $clave . '</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p style="width: 450px; font-size: 16px; color: #d1d1d1; margin: 30px 0;">
                                    Si tú no hiciste esta solicitud, cambia la contraseña de tu cuenta de gmail de inmediato para evitar accesos no autorizados o simplemente ignora este correo.
                                </p>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td align="center">
                                <div style="margin-top: 5px;">
                                    <img style="width: 155px; max-height: 60px;" src="http://drive.google.com/uc?export=view&id=1YDeGN0c_z9NfQo1aU1vD1aB3pu_ukSAK" alt="icon">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p style="color: #939393; font-weight: 900; font-size: 12.64px; letter-spacing: 1px; margin-top: 20px;">
                                    <a style="text-decoration: none; color: inherit; font-weight: inherit;" target="_blank" href="http://localhost/atomic-studios-woo/main.php?section=aviso-de-privacidad&la=esp">AVISO DE PRIVACIDAD</a>
                                    ·
                                    <a style="text-decoration: none; color: inherit; font-weight: inherit;" target="_blank" href="http://localhost/atomic-studios-woo/main.php?section=soporte&la=esp">SOPORTE</a>
                                    ·
                                    <a style="text-decoration: none; color: inherit; font-weight: inherit;" target="_blank" href="http://localhost/atomic-studios-woo/main.php?section=terminos-de-servicio&la=esp">TERMINOS DE SERVICIO</a>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td align="center" style="font-size: 11.24px; color: #939393;">
                                <p>
                                    Este es un correo de notificación de servicio.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 11.24px; color: #939393;">
                                <p>
                                    Atomic Studios 255 Av. Jujuy, C1083AAC, CABA, Argentina<br>© 2023 Atomic Studios. Todos los derechos reservados
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 11.24px; color: #939393;">
                                <p style="margin-bottom: 40px;">
                                    © 2023 Atomic Studios, War Over Ocean y todos los logotipos asociados son marcas comerciales, marcas de servicio o marcas registradas de Atomic Studios.
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </body>
        </html>';
    
        $mail->send();
        echo "1";
    } catch (Exception $e) {
        echo "";
    }
?>
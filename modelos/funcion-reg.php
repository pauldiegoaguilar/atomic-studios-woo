<?php
    require_once "../includes/config.php";

    $nombre = mysqli_real_escape_string($conn, $_POST["nomR"]);
    $email = mysqli_real_escape_string($conn, $_POST["emailR"]);
    $contra = mysqli_real_escape_string($conn, $_POST["passR"]);
    $errors = '';
    $found = false;
    $patron = '/^(?=(.*[a-zA-Z]){3,})(?=(.*[0-9]){3,})(?=(.*[!@#$%^&*(),.?":{}|<>]){3,})[a-zA-Z0-9!@#$%^&*(),.?":{}|<>]+$/';

    function findRecord($conn, $attr, $val){
        $sql = "SELECT '$attr' AS bool FROM usuarios WHERE $attr='$val'";
        $qry = mysqli_query($conn, $sql);
        $validation = mysqli_num_rows($qry);

        return $validation;
    }

    if(strlen($nombre) > 15 || empty($nombre)){
        $errors .= '&#error-nomR';
        $found = true;
    }

    if(findRecord($conn, 'nombre', $nombre)){
        $errors .= '&#error-nomRe';
        $found = true;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors .= '&#error-emailR';
        $found = true;
    }

    if(findRecord($conn, 'email', $email)){
        $errors .= '&#error-emailRe';
        $found = true;
    }
    
    if(empty($contra) || !preg_match($patron, $contra) || strlen($contra) > 20){
        $errors .= '&#error-passR';
        $found = true;
    }

    if($found){
        echo $errors;
        return;    
    }
    
    $sql =  "INSERT INTO usuarios (id, nombre, email, clave, genero, fotoPerfil, monedas, descripcion, flota_id, fecha_alta, fecha_baja, victorias) VALUES (NULL, '$nombre', '$email', '$contra', 'indefinido', 'img/user.png', 0, '...', 1, NOW(), NULL, 0 )";
            
    
    if(mysqli_query($conn, $sql)){
        $idUser = mysqli_insert_id($conn);
        $sqlInventario = "INSERT INTO inventario VALUES(NULL, '".$idUser."', 1, NULL, NOW(), NULL)";
        $res = mysqli_query($conn, $sqlInventario);

        if(!$res){
            die('Error de Consulta, intentelo más tarde: ' . mysqli_error($conn));
        }
        echo '';
        return;
    }
    else{
        die('Error de Consulta, intentelo más tarde: ' . mysqli_error($conn));
    }
?>
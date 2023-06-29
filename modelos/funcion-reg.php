<?php
include "../includes/config.php";
if(!empty($_POST['regi'])){
    if (empty($_POST['nomR']) or empty($_POST['emailR']) or empty($_POST['passR'])) {
        echo 'campos vacios';
    }else{
        $nombre = $_POST["nomR"];
        $email = $_POST["emailR"];
        $contra = $_POST["passR"];
        $sql = "INSERT INTO usuarios (id, nombre, email, clave, genero, fotoPerfil, monedas, descripcion, flota_id, fecha_alta, fecha_baja, victorias) VALUES (NULL, '$nombre', '$email', '$contra', 'indefinido', NULL, 0, '...', 1, NOW(), NULL, 0 ) ";
        
        if (mysqli_query($conn, $sql)){
            header('Location: ../main.php?section=terminos-de-servicio');
        }else{
            echo'gilipollas';
        }
    }
}
?>
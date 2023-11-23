<?php
    $conn =  mysqli_connect('localhost', 'root', '', 'oceandb');
    
    if(!$conn){
        die("Hubo un problema de conexion, contactate con soporte para mas informacion: " . mysqli_connect_error());
    }

    $userPOST = $_POST['userPOST'];
    $passPOST = $_POST['passPOST'];

    $sql = "SELECT id FROM usuarios WHERE nombre = '" . $userPOST . "' AND clave = '" . $passPOST ."'";

    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        echo $user['id'];
    }else{
        echo "0";
    }

    $conn->close();
?>
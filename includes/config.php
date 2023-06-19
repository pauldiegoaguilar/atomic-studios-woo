<?php
    $conn =  mysqli_connect('localhost', 'root', '', 'oceandb');
    
    if(!$conn){
        echo "Hubo un problema de conexion, contactate con soporte para mas informacion";
    }
?>
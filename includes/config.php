<?php

    $conn =  mysqli_connect('localhost', 'root', '', 'oceandb');
    
    if(!$conn){
        die("Hubo un problema de conexion, contactate con soporte para mas informacion: " . mysqli_connect_error());
    }
?>
<?php
    session_start();

    if(empty($_SESSION)){
        header('Location: index.php');
        exit;
    }

    require_once "../includes/config.php";

    $userId = $_SESSION['user_id'];
    $codigo = $_POST['producto'];

    $qryTransaccion = mysqli_query($conn, "INSERT INTO compras (id_trans, usuario_id, codigoProducto, estatus, fechaCompra) VALUES (NULL, '".$userId."', '".$codigo."', 'pendiente', NOW());");

    if(!$qryTransaccion){
        header('HTTP/1.1 500 Internal Server Error');
    }

    $qryProducto = mysqli_query($conn, "SELECT * FROM ofertas WHERE codigoProducto = '".$codigo."' AND fin_oferta IS NULL OR fin_oferta < NOW()");

    if(!$qryProducto){
        header('HTTP/1.1 500 Internal Server Error');
    }

    $producto = mysqli_fetch_assoc($qryProducto);

    if(!$producto['productos_id']){
        $sql = "UPDATE usuarios SET monedas = " . $producto['cantidad'] . " WHERE usuarios.id = $userId";
        $qryReward = mysqli_query($conn, $sql);

        if(!$qryProducto){
            header('HTTP/1.1 500 Internal Server Error');
        }
    }
?>
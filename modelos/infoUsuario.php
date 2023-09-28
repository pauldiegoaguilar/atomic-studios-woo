<?php
    require_once "../includes/config.php";
    session_start();

    if(!isset($_SESSION['user_id']) || !$_SESSION['esMod']){
        session_unset();
        session_destroy();

        header('Location: ../index.php');
    }

    $res = [];
    $idUser = $_GET['user'];
    
    $sqlFlotas = "SELECT flotas.nombre as flota, usuarios.nombre as usuario, lastP.nombre as lastProp FROM inventario INNER JOIN usuarios ON inventario.usuario_id = usuarios.id INNER JOIN usuarios as lastP ON inventario.usuario_id = lastP.id INNER JOIN flotas ON inventario.flota_id = flotas.id WHERE usuario_id = '".$idUser."'";
    $qryFlotas = mysqli_query($conn, $sqlFlotas);

    if(!$qryFlotas){
        header('HTTP/1.1 500 Internal Server Error');
        exit;
    }

    $rowsF = mysqli_fetch_all($qryFlotas);
    
    $htmlF = "";

    foreach($rowsF as $row){
        $htmlF .= "<tr>";

        foreach ($row as $col) {
            $htmlF .= "<td>" . $col . "</td>";
        }

        $htmlF .= "</tr>";
    }
    
    $res[0] = $htmlF;

    $sqlCompras = "SELECT id_trans, usuarios.nombre as usuario, ofertas.nombre as producto, fechaCompra FROM compras INNER JOIN usuarios ON compras.usuario_id = usuarios.id INNER JOIN ofertas ON compras.codigoProducto = ofertas.codigoProducto WHERE usuario_id = '".$idUser."'";
    $qryCompras = mysqli_query($conn, $sqlCompras);

    if(!$qryCompras){
        header('HTTP/1.1 500 Internal Server Error');
        exit;
    }

    $rowsC = mysqli_fetch_all($qryCompras); 

    $htmlC = "";

    foreach($rowsC as $row){
        $htmlC .= "<tr>";

        foreach ($row as $col) {
            $htmlC .= "<td>" . $col . "</td>";
        }

        $htmlC .= "</tr>";
    }

    $res[1] = $htmlC;
    echo json_encode($res);
?>
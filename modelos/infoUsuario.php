<?php
    require_once "../includes/config.php";
    session_start();

    if(!isset($_SESSION['user_id']) || !$_SESSION['esMod']){
        session_unset();
        session_destroy();

        header('Location: ../index.php');
    }

    
    $idUser = $_GET['user'];
    
    $sqlFlotas = "SELECT id_trans, compras.codigoProducto, ofertas.nombre as producto, fechaCompra, flotas.nombre as flota, " .
                    "usuarios.nombre as usuario, IF(lastOwner.nombre IS NULL, 'Objeto nuevo', lastOwner.nombre) as lastProp, inventario.fecha_baja as iBaja, usuarios.descripcion FROM usuarios " .
                    "LEFT JOIN compras ON compras.usuario_id = usuarios.id ".
                    "LEFT JOIN ofertas ON compras.codigoProducto = ofertas.codigoProducto ".
                    "LEFT JOIN inventario ON inventario.usuario_id = usuarios.id ".
                    "LEFT JOIN flotas ON flotas.id = inventario.flota_id ".
                    "LEFT JOIN usuarios as lastOwner ON lastOwner.id = inventario.lastOwner ".
                    "WHERE usuarios.id = '".$idUser."'";
                    
    $qryFlotas = mysqli_query($conn, $sqlFlotas);

    if(!$qryFlotas){
        header('HTTP/1.1 500 Internal Server Error');
        exit;
    }

    $res = [];
    $htmlF = "";
    $htmlC = "";
    $htmlD = "";

    while($row = mysqli_fetch_assoc($qryFlotas)){
        $htmlD .= "<tr>";
        $htmlD .= "<td contenteditable='true'>".$row['descripcion']."</td>";
        $htmlD .= "<td><button class='btn form-control' onclick='modificarUsuario();'>Modificar</button></td>";
        $htmlD .= "</tr>";

        $res['descripcion'] = $htmlD;
        
        $htmlF .= "<tr>";
        $htmlF .= "<td>".$row['flota']."</td>";
        $htmlF .= "<td>".$row['usuario']."</td>";
        $htmlF .= "<td>".$row['lastProp']."</td>";
        $htmlF .= "<td>".$row['iBaja']."</td>";
        $htmlD .= "<td><button class='btn form-control' onclick='modificarUsuario();'>Modificar</button></td>";
        $htmlF .= "</tr>";

        $res['inventario'] = $htmlF;

        $htmlC .= "<tr>";
        $htmlC .= "<td>".$row['id_trans']."</td>";
        $htmlC .= "<td>".$row['codigoProducto']."</td>";
        $htmlC .= "<td>".$row['producto']."</td>";
        $htmlC .= "<td>".$row['fechaCompra']."</td>";
        $htmlC .= "</tr>";

        $res['compras'] = $htmlC;
    }

    echo json_encode($res);
?>
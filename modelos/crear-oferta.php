<?php
    session_start();
    
    if(empty($_SESSION) || !$_SESSION['esMod']){
        header('Location: ../index.php');
        exit;
    }

    require_once "../includes/config.php";

  

    if($_FILES['productoImg']['error'] < 3){
        move_uploaded_file($_FILES['productoImg']['tmp_name'], "../img/ofertas/".$_FILES['productoImg']['name']);
        $rutaDb = "img/ofertas/".$_FILES['productoImg']['name'];
    } else{
        die('Error en la carga de imagen');
        exit;
    }

    $producto = $_POST['productoNombre'];
    $desc = $_POST['productoDesc'];
    $precio = $_POST['productoPrecio'];
    $cantidad = $_POST['productoCantidad'];
    $codigo = $_POST['productoCodigo'];
    $baja = $_POST['productoBaja'];
   
    $sql = "INSERT INTO ofertas (nombre, descripcion, precio, cantidad, img, codigoProducto, inicio_oferta, fin_oferta) VALUES (?,?,?,?,?,?,NOW(),?);";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssdisss", $producto, $desc, $precio, $cantidad, $rutaDb, $codigo, $baja);

    if(!mysqli_stmt_execute($stmt)){
        die('Error en la carga de datos');
        exit;
    }

    mysqli_stmt_close($stmt);

    header('Location: ../main.php?section=tienda&la=' . $_POST['la']);
?>
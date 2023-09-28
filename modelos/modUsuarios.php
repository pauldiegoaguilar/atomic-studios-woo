<?php
    require_once "../includes/config.php";
    session_start();

    if(!isset($_SESSION['user_id']) || !$_SESSION['esMod']){
        session_unset();
        session_destroy();

        header('Location: ../index.php');
    }

    $rAmount = $_GET['from'];
    $fIndex = $_GET['filter'];
    $nick = $_GET['user'];

    $filters = array("none"=>"", "banned"=>"AND fecha_baja is not null", "userName"=>"AND nombre = '".$nick."'" );

    $sql = "SELECT id, nombre, email, clave, genero, monedas, descripcion, fecha_alta, fecha_baja FROM usuarios";
    $sql .= " WHERE esMod = 0 " .  $filters[$fIndex];
    $sql .= " LIMIT 0, " . $rAmount;

    $qry = mysqli_query($conn, $sql);

    if(!$qry){
        header('HTTP/1.1 500 Internal Server Error');
        exit;
    }

    $headers = mysqli_fetch_fields($qry);
    $rows = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    $html = "";

    foreach($rows as $row){
        $html .= "<tr id='col-" . $row['id'] . "' onclick='selectRow(this);'>";

        foreach ($row as $col) {
            $html .= "<td>" . $col . "</td>";
         
        }

        if(!$row['fecha_baja']){
            $html .= "<td><button class='btn form-control' onclick='suspenderUsuario(".$row['id'].");'>Suspender</button></td>";
        } else{
            $html .= "<td><button class='btn form-control' onclick='desBanear(".$row['id'].");'>Quitar Ban</button></td>";
        }

        $html .= "</tr>";
    }

    echo $html;
?>
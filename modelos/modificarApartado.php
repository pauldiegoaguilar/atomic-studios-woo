<?php

    $apartado = $_GET['ap'];
    $la = $_GET['la'];
    $ruta = "../includes/languages/$la.ini";
    
    $lanFile = parse_ini_file($ruta, true, INI_SCANNER_RAW);
    $modified = json_decode($_POST['txt']);

    foreach($modified as $key => $val){
        $lanFile[$apartado][$key] = strip_tags($modified->$key, '<br>');
    }

    if($_FILES){
        foreach($_FILES as $k => $v){
            if($_FILES[$k]['error'] < 4){

                $nombreArchivo = $_FILES[$k]['name'];
                $ubicacion = $_FILES[$k]['tmp_name'];
                move_uploaded_file($ubicacion, '../img/' . $nombreArchivo);
                echo $apartado . '--------------' . $k;
                $lanFile[$apartado][$k] = 'img/' . $nombreArchivo;
            } else{
                die("Error: Comuniquese con soporte para mas informacion");
            }
        }
    }

    $iniString = '';
    foreach ($lanFile as $section => $values) {
        $iniString .= "[$section]\n";
        foreach ($values as $key => $value) {
            $iniString .= "$key = \"$value\"\n";
        }
        $iniString .= "\n";
    }

    file_put_contents($ruta, $iniString);
?>
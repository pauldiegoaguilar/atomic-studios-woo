<?php

    $apartado = $_GET['ap'];
    $la = $_GET['la'];
    $ruta = "../includes/languages/$la.ini";
    
    $lanFile = parse_ini_file($ruta, true, INI_SCANNER_RAW);
    $modified = $_POST;

    foreach($lanFile[$apartado] as $key => $val){
        $lanFile[$apartado][$key] = strip_tags($modified[$key], '<br>');
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
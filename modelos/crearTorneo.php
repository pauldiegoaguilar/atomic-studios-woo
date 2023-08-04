<?php
    require_once "../includes/config.php";
   
    // TRADUCCION
        $texto = $_POST['titulo'] . '|' . $_POST['desc']; //Texto a traducir
        $idiomaCambio = $_POST['la'] == 'esp' ? 'es|en' : 'en|es';  //Formato: idioma fuente|idioma a traducir

        $solicitud = curl_init();   //Creo solicitud HTTP
        $url = 'https://api.mymemory.translated.net/get';   //Url de la API del traductor

        curl_setopt($solicitud, CURLOPT_URL, $url); //Establezco dominio destino de solicitud
        curl_setopt($solicitud, CURLOPT_POST, true);    //La solicitud es mediante POST
        curl_setopt($solicitud, CURLOPT_POSTFIELDS, ['q' => $texto, 'langpair' => $idiomaCambio]);    //Establezco datos a enviar
        curl_setopt($solicitud, CURLOPT_RETURNTRANSFER, true);

        //curl_setopt($solicitud, CURLOPT_HTTPHEADER, ['Authorization: DeepL-Auth-Key ' . 'torresyasociados',]);    Anterior colaborador (ya no me cae bien)

        $respuesta = curl_exec($solicitud); //Envio la solicitud, recibo JSON

        if (!$respuesta) {
            die('Error en la solicitud: ' . curl_error($solicitud));    //Imprimo error en caso de fallo
        } 
        
        $traduccion = json_decode($respuesta, true);
        curl_close($solicitud); //Cierro la conexion


    //  MUEVO IMAGEN DE TORNEO
        $nombreArchivo = $_FILES['fileSelector']['name'];

        if($_FILES['fileSelector']['error'] != 4){ //De encontrarse archivo de imagen, la muevo a la carpeta img
            move_uploaded_file($_FILES['fileSelector']['tmp_name'], '../img/' . $nombreArchivo);
        }
        else{
            die('Error archivo: No se logro mover la imagen, de persistir el error contactar con staff');
        }
        

    // DATOS PARA ENVIO
        $sr = explode('|', $texto); //titulo y descripcion en idioma input
        $tr = explode('|', $traduccion['responseData']['translatedText']); //lo mismo en idioma de salida
        $monedas = $_POST['monedas'];
        $chest = $_POST['cofre'];
        $cant = $_POST['cant'];
        $ruta = 'img/' . $nombreArchivo;

        $langFormat = explode('|', $idiomaCambio);
        $configLan['es'] =  'esp';
        $configLan['en'] =  'eng';
        
    // SUBO DATOS
        $sql = "INSERT INTO torneos (id, titulo, descripcion, monedas, cofre_id, cantidadCofres, campeon_id, fecha_alta, fecha_baja, rutas, idioma) VALUES ";
        $sql .= "(NULL, '" . htmlentities(addslashes($sr[0])) . "', '" . htmlentities(addslashes($sr[1])) . "', $monedas, $chest, $cant, NULL, NOW(), NULL, '" .$ruta. "', '" . $configLan[$langFormat[0]] . "') ,";
        $sql .= "(NULL, '" . htmlentities(addslashes($tr[0])) . "', '" . htmlentities(addslashes($tr[1])) . "', $monedas, $chest, $cant, NULL, NOW(), NULL, '" .$ruta. "', '" . $configLan[$langFormat[1]] . "')";
        $qry = mysqli_query($conn, $sql);

        if(!$qry){
            die('Error de consulta: ' . mysqli_error($conn));
        }
?>
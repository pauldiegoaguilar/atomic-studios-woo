<?php 
    $qry = mysqli_query($conn, "SELECT * FROM ofertas WHERE fin_oferta IS NULL OR NOW() < fin_oferta");

    if(!$qry) 
        die("Error de consulta, contactar con soporte de persistir");

    $filas = mysqli_fetch_all($qry, MYSQLI_ASSOC);
?>

<div class="display-6 text-light text-center mb-4" id="ofertasPerm">&bull;&nbsp;<?php echo $lang['tienda']['txtSec1t']?>&nbsp;&bull;</div>

<div class="d-flex flex-wrap justify-content-evenly position-relative border-top border-bottom border-secondary w-100 m-auto mb-5" id="ofertasPeL">
    <?php if(empty($user)){?>
        <div class="d-flex align-items-center justify-content-center w-100 h-100 position-absolute z-1 bg-dark bg-gradient bg-opacity-75 text-white text-center display-6">
            <?php echo $lang['tienda']['aviso']?>
        </div>
    <?php } foreach($filas as $fila){ if($fila['fin_oferta'] === NULL){?>
        <div class="custom-card p-3 position-relative w-sm-100" style="width: 320px; height: 360px; cursor: pointer;" onclick="abrirVentanaPago('<?php echo $fila['codigoProducto']?>');">
            <div class="position-absolute fs-2 text-white" style="top: -5px; left: -5px;">USD$<?php echo $fila['precio']?></div>
            <img style="width: 100%; height: 85%;" src="<?php echo $fila['img']?>" alt="<?php echo $fila['nombre']?>">
            <div class="bg-danger text-white text-center fs-2" style="width: 100%; height: 15%;"><?php echo str_replace(" ","&nbsp;",$fila['nombre'])?></div>
        </div>
        <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
        data-preference-id="<?php echo $fila['codigoProducto']?>" data-source="button">
        </script>
    <?php } }?>
</div>

<div class="display-6 text-light text-center mb-4" id="ofertasPerm">&bull;&nbsp;<?php echo $lang['tienda']['txtSec2t']?>&nbsp;&bull;</div>

<div class="d-flex flex-wrap justify-content-evenly position-relative border-top border-bottom border-secondary w-100 m-auto" id="ofertasPeL">
    <?php if(empty($user)){?>
        <div class="d-flex align-items-center justify-content-center w-100 h-100 position-absolute z-1 bg-dark bg-gradient bg-opacity-75 text-white text-center display-6">
            <?php echo $lang['tienda']['aviso']?>
        </div>
    <?php } foreach($filas as $fila){ if($fila['fin_oferta'] != NULL){?>
        <div class="custom-card p-3 position-relative w-sm-100" style="width: 320px; height: 360px; cursor: pointer;" onclick="abrirVentanaPago('<?php echo $fila['codigoProducto']?>');">
            <div class="position-absolute fs-2 text-white" style="top: -5px; left: -5px;">USD$<?php echo $fila['precio']?></div>
            <div class="position-absolute fs-2 text-white" style="top: -5px; right: -5px;"><?php echo $fila['fin_oferta']?></div>
            <img style="width: 100%; height: 85%;" src="<?php echo $fila['img']?>" alt="<?php echo $fila['nombre']?>">
            <div class="bg-danger text-white text-center fs-2" style="width: 100%; height: 15%;"><?php echo str_replace(" ","&nbsp;",$fila['nombre'])?></div>
        </div>
        <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
        data-preference-id="<?php echo $fila['codigoProducto']?>" data-source="button">
        </script>
    <?php } }?>
</div>

<?php if(!empty($user) && $user['esMod']){?>
    <button class="btn btn-light form-control border-0 mt-3" onclick="$('#ofertasPerm, #btnOf, #ofertasPeL ,#formOferta').toggleClass('d-none');" id="btnOf">Agregar oferta</button>
    <form action="modelos/crear-oferta.php" enctype="multipart/form-data" method="POST" class="d-none row w-100 p-5" id="formOferta">
        <div class="col-md-6">
            <input type="text" name="productoNombre" placeholder="Nombre del producto" class="form-control my-3" maxlength="15" required>
            <textarea oninput="autoResize(this);" name="productoDesc" placeholder="Descripcion" maxlength="250" class="form-control overflow-hidden my-3" style="resize: none;" required></textarea>
            <input type="number" placeholder="Precio" name="productoPrecio" class="form-control my-3" required>
            <input type="number" placeholder="Cantidad" name="productoCantidad" class="form-control my-3" required>
            <input type="text" placeholder="Código" name="productoCodigo" class="form-control my-3" required>
            <input type="datetime" name="productoBaja" placeholder="Establecer fecha baja del producto (Ej:2020-10-22 00:00:00)" class="form-control my-3" min="<?php echo date("Y-m-d h:i:s")?>" pattern="\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}">
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center p-0">
            <div class="position-relative m-auto border border-1" style="width: 320px; height: 360px;">
                <input type="file" name="productoImg" accept="image/*" style="cursor: pointer; width: 100%; height: 85%;" class="opacity-0" alt="Clic para insertar imagen" required>
                <img style="width: 100%; height: 85%;" class="d-none" src="" alt="imageEx">
                <div class="bg-danger text-white text-center fs-2" style="width: 100%; height: 15%;">Imagen</div>
            </div>
        </div>
        <input type="hidden" name="la" value="<?php echo $_GET['la']?>">
        <input type="submit" value="Crear nueva Oferta" class="form-control my-3">
    </form>
    <script>
        function autoResize(textarea){
            textarea.style.height = 'auto';
            textarea.style.height = (textarea.scrollHeight) + 'px';
        }
    </script>
<?php }?>

<script>
    $('.mercadopago-button').css('display', 'none');

    let currentProduct

    function abrirVentanaPago(preferenceId) {

        var botonPago = $("script[data-preference-id='" + preferenceId + "']").next();
        
        currentProduct = preferenceId;
        botonPago.click();
    }
    

    window.addEventListener("message", function (event) {

        if(event.origin === "https://www.mercadopago.com.ar"){
            
            if (event.data.type === "submit") {

                let compra = currentProduct; 
                console.log("Información de la compra:", currentProduct);
                $.ajax({
                    url: "modelos/compras.php",
                    method: "POST",
                    data: {producto: currentProduct},

                    success: function(res){
                        alert("Compra concretada con éxito, podras ver los resultados en tu perfil");
                    },
                    
                    error: function(res){
                        console.log(res);
                        alert("Hubo un error en la compra, comunicarse con soporte");
                    }
                });
            } 
        }
    });

</script>
<?php 
    if(empty($user)) {
        die("Error 404, Login for more info");
    }
    $qry = mysqli_query($conn, "SELECT * FROM ofertas");

    if(!$qry) 
        die("Error de consulta, contactar con soporte de persistir");

    $filas = mysqli_fetch_all($qry, MYSQLI_ASSOC);
?>

<div class="display-6 text-light text-center mb-4">&bull;&nbsp;<?php echo $lang['tienda']['txtSec1t']?>&nbsp;&bull;</div>


<?php
    require_once "includes/productos/productosMercadopago.txt";
?>

<div class="row d-flex justify-content-evenly border-top border-bottom border-secondary w-100 m-auto">
    <?php foreach($filas as $fila) {?>
        <div class="custom-card col-4 p-3 position-relative" style="width: 320px; height: 360px; cursor: pointer;" onclick="abrirVentanaPago('<?php echo $fila['codigoProducto']?>');">
            <div class="position-absolute fs-2 text-warning" style="top: -5px; left: -5px;">USD<?php echo $fila['precio']?></div>
            <img class="border border-3 border-info" style="width: 100%; height: 85%;" src="<?php echo $fila['img']?>" alt="<?php echo $fila['nombre']?>">
            <div class="bg-warning text-white text-center fs-2" style="width: 100%; height: 15%;"><?php echo str_replace(" ","&nbsp;",$fila['nombre'])?></div>
        </div>
    <?php }?>
</div>

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
                        alert("Hubo un error en la compra, comunicarse con soporte urgentemente");
                    }
                });
            } 
        }
    });

</script>
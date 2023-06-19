<?php
    require_once 'includes/config.php';
    
    require_once 'modelos/torneos.php';
?>

<h2 class="text-white">Ultimos Torneos</h2>
<img src="img/linea.png" alt="OUTLINE" class="w-100" style="filter: invert(100%);">

<div class="row">
<?php foreach($torneosInfo as $torneo){?>
        <div class="card m-2" style="width: 14rem;">
          <img class="card-img-top" src="img/radar.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title text-uppercase text-white"><?php echo $torneo['nombre']?></h3>
            <p class="card-text"><?php echo $torneo['descripcion']?></p>
            <p class="m-0"><i>Publicado: <?php echo $torneo['fecha_alta']?></i></p>
            <p class="m-0"><i>Finalizado: <?php echo $torneo['fecha_baja']==NULL ? '--/--/--' : $torneo['fecha_baja']?></i></p>
          </div>
        </div>
<?php }?>
</div>
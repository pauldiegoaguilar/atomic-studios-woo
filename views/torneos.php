<?php
    require_once 'includes/config.php';
    
    require_once 'modelos/torneos.php';
?>

<h2 class="text-white border-bottom py-1">Ultimos Torneos</h2>

<div class="row">
<?php foreach($torneosInfo as $torneo){?>
        <div class="card m-2" style="width: 14rem;" id="card-<?php echo $torneo['id']?>" onclick="MostrarCard(<?php echo $torneo['id']?>);">
          <img class="card-img-top p-1" src="<?php echo $torneo['ruta']?>" alt="Card image cap" id="t-img-<?php echo $torneo['id']?>">
          <div class="card-body">
            <h3 class="row justify-content-center text-uppercase text-white" id="t-title-<?php echo $torneo['id']?>"><?php echo $torneo['nombre']?></h3>
            <p class="card-text text-truncate" id="t-desc-<?php echo $torneo['id']?>"><?php echo $torneo['descripcion']?></p>
            <p class="m-0"><i id="t-alta-<?php echo $torneo['id']?>">Publicado: <?php echo $torneo['fecha_alta']?></i></p>
            <p class="m-0"><i id="t-baja-<?php echo $torneo['id']?>">Finalizado: <?php echo $torneo['fecha_baja']==NULL ? '--/--/--' : $torneo['fecha_baja']?></i></p>
          </div>
        </div>
<?php }?>
</div>

<div class="" id="fake-screen">
  <div class="row m-2 bg-dark" id="ts-card" style="display: none">
    <img class="col-sm-6" src="img/radar.png" alt="Card Image" id="ts-img">
    <div class="card-body col-sm-6 p-3">
      <button type="button" class="btn-close btn-close-white" aria-label="Close" onclick="close();"></button>
      <h1 class="card-title text-white text-uppercase" id="ts-title">Card title</h1>
      <p class="card-text text-uppercase" id="ts-desc">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text">
        <p class="text-muted" id="ts-alta">Last updated 3 mins ago</p>
        <p class="text-muted" id="ts-baja">Last updated 3 mins ago</p>
      </p>
    </div>
  </div>
</div>
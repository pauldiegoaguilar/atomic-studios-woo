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
            <p class="d-none" id="t-coins-<?php echo $torneo['id']?>"><?php echo $torneo['monedas']?></p>
            <p class="d-none" id="t-champ-<?php echo $torneo['id']?>"><?php echo $torneo['userName']?></p>
            <p class="d-none" id="t-prolife-<?php echo $torneo['id']?>"><?php echo $torneo['fotoPerfil']?></p>
            <p class="d-none" id="t-rareza-<?php echo $torneo['id']?>"><?php echo $torneo['rareza']?></p>
          </div>
        </div>
<?php }?>
</div>

<div class="w-100 h-100 fixed-top justify-content-center align-items-center bg-transparent" id="fk-screen" style="display: none;">
  <div class="row m-3 bg-dark overflow-auto" id="ts-card" style="display: none; max-width: 70em; max-height: 40em;">
    <img class="col-md-6" src="img/radar.png" alt="Card Image" id="ts-img">
    <div class="card-body col-md-6 position-relative p-3">
      <div type="button" class="btn-close btn-close-white position-absolute end-0" aria-label="Close" onclick="$('#ts-card, #fk-screen').hide('slow');"></div>
      <!-- TITULO -->
      <h1 class="card-title text-white text-uppercase text-center m-3" id="ts-title">Card title</h1>
      <!-- DESCRIPCION -->
      <p class="text-uppercase text-center w-100 text-white my-3" id="ts-desc">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <!-- RECOMPENSAS -->
      <h3 class="text-uppercase text-danger text-center my-2">recompensas</h3>
      <div class="d-flex justify-content-around">
        <div class="d-flex align-items-center" style="height: 30px; width: 30px;">
          <p class="text-danger px-1 fs-4 m-0">+1</p>
          <img class="img-fluid" style="filter:invert(100%);" src="img/unico.png" alt="chestImage">
          <p id="ts-rareza" class="text-danger text-uppercase px-1 fs-8 m-0"></p>
        </div>
        <h4 id="ts-coins" class="text-warning text-uppercase px-2" style="margin:0px;" >An euro</h4>
      </div>
      <!-- CAMPEON -->
      <h3 class="text-uppercase text-danger text-center my-2">campeon</h3>
      <h4 id="ts-champ" class="text-white text-center text-uppercase fs-4 py-3">See ya champ</h4>
      <!-- FOOTER -->
      <div class="card-footer w-100 d-flex justify-content-between">
        <p class="text-muted" id="ts-alta">Last updated 3 mins ago</p>
        <p class="text-muted" id="ts-baja">Last updated 3 mins ago</p>
      </div>
    </div>
  </div>
</div>


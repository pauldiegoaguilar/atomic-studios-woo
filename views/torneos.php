<?php
    require_once 'includes/config.php';
    
    require_once 'modelos/torneos.php';
?>

<div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;">
  <h2 class="text-white border-bottom py-1">Ultimos Torneos</h2>

  <div class="row d-flex justify-content-center">
  <?php foreach($torneosInfo as $torneo){?>
          <div class="custom-card card m-2" style="width: 14rem; background-color: #222022; cursor: pointer;" id="card-<?php echo $torneo['id']?>" onclick="MostrarCard(<?php echo $torneo['id']?>);">
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
    <div class="row m-3 overflow-auto position-relative" id="ts-card" style="display: none; max-width: 1000px; max-height: 530px; background-color: #222022;">
      <div type="button" class="btn-close btn-close-white position-absolute end-0 top-0 p-2" style="z-index: 1;" aria-label="Close" onclick="$('#ts-card, #fk-screen').hide('slow');"></div>
      <img class="col-lg-6 p-0" src="img/radar.png" alt="Card Image" id="ts-img">
      <div class=" col-lg-6 card-body position-relative p-3">
        <!-- TITULO -->
        <h1 class="card-title text-white text-uppercase text-center m-3" id="ts-title">Card title</h1>
        <!-- DESCRIPCION -->
        <p class="text-uppercase text-center w-100 text-white my-5" id="ts-desc">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <hr>
        <!-- RECOMPENSAS -->
        <h3 class="text-uppercase text-danger text-center my-2">recompensas</h3>
        <div class="row w-100 m-0">
          <div class="col-6 d-flex align-items-center justify-content-center">
            <p class="px-1 fs-4 m-0">+1</p>
            <img style="width: 1.50em; height:1.50em; filter:invert(100%);" src="img/unico.png" alt="chestImage">
            <p id="ts-rareza" class="text-uppercase px-1 m-0"></p>
          </div>
          <h4 id="ts-coins" class="col-6 text-center coins text-uppercase m-0">An euro</h4>
        </div>
        <hr>
        <!-- CAMPEON -->
        <h3 class="text-uppercase text-danger text-center mt-3">campeon</h3>
        <h4 id="ts-champ" class="text-warning text-center text-uppercase fs-4 mb-2">See ya champ</h4>
        <!-- FOOTER -->
        <div class="d-flex justify-content-between w-100 position-absolute bottom-0 start-0 px-3 m-0">
          <p class="text-muted text-start m-0 p-0" id="ts-alta">Last updated 3 mins ago</p>
          <p class="text-muted text-end m-0 p-0" id="ts-baja">Last updated 3 mins ago</p>
        </div>
      </div>
    </div>
  </div>
</div>
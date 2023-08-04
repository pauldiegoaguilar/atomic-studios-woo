<?php
    require_once 'includes/config.php';
    
    require_once 'modelos/torneos.php';
?>

<div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;">
  <h2 class="d-flex justify-content-between text-white border-bottom py-1">
    <?php echo $lang['torneos']['txtSec1t'];
    if(!empty($user) && $user['esMod']){?>
      <button onclick="$('#fk-screen, #createCard').show('slow').css({'display': 'flex','backdrop-filter': 'blur(5px)'})" class="btn btn-light px-2 py-0 fs-4">+</button>
    <?php }?>
  </h2>

  <div class="row d-flex flex-wrap justify-content-around">
  <?php foreach($torneosInfo as $torneo){?>
    <div class="custom-card m-2 p-0 overflow-hidden position-relative" style="width: 19rem; height: 450px; cursor: pointer;" id="card-<?php echo $torneo['id']?>" onclick="MostrarCard(<?php echo $torneo['id']?>);">
    <?php if(!empty($user) && $user['esMod']){?>
      <div type="button" class="btn-close btn-close-white position-absolute end-0 top-0 border rounded-circle bg-light" aria-label="Close" onclick="confirm('<?php echo $lang['torneos']['alertM']?>') ? location.assign('modelos/eliminarTorneo.php?id=<?php echo $torneo['id'] . '&la=' . $_GET['la']?>') : 'xd'"></div>
    <?php }?>  
    <img class="w-100 h-50" style="object-fit: contain;" src="<?php echo $torneo['rutas']?>" alt="Card image cap" id="t-img-<?php echo $torneo['id']?>">
      <div class="h-50 py-2">
        <div class="d-flex fs-6 my-1">
          <p class="text-white m-0" id="t-alta-<?php echo $torneo['id']?>"><?php echo str_replace('-', '/', $torneo['fecha_alta'])?></p>
          <span>&nbsp;&nbsp;->&nbsp;&nbsp;</span>
          <p class="text-white m-0" id="t-baja-<?php echo $torneo['id']?>"><?php echo $torneo['fecha_baja'] === NULL ? '--/--/--' : $torneo['fecha_baja']?></p>
        </div>
        <h3 class="row justify-content-center text-center text-uppercase text-white" id="t-title-<?php echo $torneo['id']?>"><?php echo $torneo['titulo']?></h3>
        <p id="t-desc-<?php echo $torneo['id']?>"><?php echo ucfirst(strtolower($torneo['descripcion']))?></p>
        <p class="d-none" id="t-coins-<?php echo $torneo['id']?>"><?php echo $torneo['monedas']?></p>
        <p class="d-none" id="t-champ-<?php echo $torneo['id']?>"><?php echo $torneo['userName']?></p>
        <p class="d-none" id="t-prolife-<?php echo $torneo['id']?>"><?php echo $torneo['fotoPerfil']?></p>
        <p class="d-none" id="t-cofreCant-<?php echo $torneo['id']?>"><?php echo $torneo['cantidadCofres']?></p>
        <p class="d-none" id="t-cofre-<?php echo $torneo['id']?>"><?php echo $torneo['nombre']?></p>
      </div>
    </div>
  <?php }?>
  </div>

  <div class="w-100 h-100 fixed-top justify-content-center align-items-center bg-transparent" id="fk-screen" style="display: none;">
    <div class="row m-3 overflow-auto position-relative" id="ts-card" style="display: none; max-width: 1000px; max-height: 530px; background-color: #222022;">
      <div type="button" class="btn-close btn-close-white position-absolute end-0 top-0 p-2" style="z-index: 1;" aria-label="Close" onclick="$('#ts-card, #fk-screen').hide('slow');"></div>
      <div class="col-lg-6 p-0 d-flex align-items-center justify-content-center" >
        <img style="max-height: 450px; max-width: 80%; object-fit: contain;" src="img/radar.png" alt="Card Image" id="ts-img">
      </div>
      <div class=" col-lg-6 card-body position-relative p-3">
        <!-- TITULO -->
        <h1 class="card-title text-white text-uppercase text-center m-3" id="ts-title">Card title</h1>
        <!-- DESCRIPCION -->
        <p class="text-uppercase text-center w-100 text-white my-3" id="ts-desc">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <hr>
        <!-- RECOMPENSAS -->
        <h3 class="text-uppercase text-danger text-center my-2"><?php echo $lang['torneos']['cardR']?></h3>
        <div class="row align-items-center w-100 m-0">
          <div class="col-sm-6 d-flex align-items-center justify-content-center">
            x<p class="px-1 fs-4 m-0" id="ts-cofreCant"></p>
            <img style="width: 1.50rem; height:1.50em; filter:invert(100%);" src="img/unico.png" alt="chestImage">
            <p id="ts-cofre" class="text-center text-uppercase px-1 m-0 fs-5" style="color: red;"></p>
          </div>
          <h4 id="ts-coins" class="col-sm-6 text-center coins text-uppercase m-0 fs-3">An euro</h4>
        </div>
        <hr>
        <!-- CAMPEON -->
        <h3 class="text-uppercase text-danger text-center mt-3"><?php echo $lang['torneos']['cardC']?></h3>
        <h4 id="ts-champ" class="text-warning text-center text-uppercase fs-4 mb-2">See ya champ</h4>
        <!-- FOOTER -->
        <div class="d-flex justify-content-between w-100 position-absolute bottom-0 start-0 px-3 m-0">
          <p class="text-muted text-start m-0 p-0" id="ts-alta">Last updated 3 mins ago</p>
          <p class="text-muted text-end m-0 p-0" id="ts-baja">Last updated 3 mins ago</p>
        </div>
      </div>
    </div>
    <?php if(!empty($user) && $user['esMod']){?>
      <form onsubmit="event.preventDefault(); verifForm();" action="modelos/crearTorneo.php" method="POST" enctype="multipart/form-data" class="row m-3 overflow-auto position-relative" id="createCard" style="display: none; max-width: 1000px; max-height: 530px; background-color: #222022;">
        <div type="button" class="btn-close btn-close-white position-absolute end-0 top-0 p-2" style="z-index: 1;" aria-label="Close" onclick="$('#createCard, #fk-screen').hide('slow');"></div>
        <div class="col-lg-6 position-relative d-none p-0 d-flex align-items-center justify-content-center m-auto" id="preview">
          <div class="image-container h-100 w-100 d-flex justify-content-center align-items-center">
              <img style="max-height: 450px; max-width: 80%; object-fit: contain;" alt="Card Image">
              <p class="display-1" onclick="discardPrev();">X</p>
          </div>
        </div>
        <div class="col-lg-6 p-0 d-flex justify-content-center align-items-center position-relative" style="max-width: 1000px; min-height: 330px;" id="fileDisplayer">
          <input id="fileSelector" name="fileSelector" type="file" class="opacity-0 w-75 h-50" onchange="previousView(this);" accept="image/*" required>
          <label for="fileSelector" class="position-absolute text-center rounded border border-dark w-75 h-50">
            <p class="display-2 text-muted">+</p>
            <p class="text-white"><?php echo $lang['torneos']['cardF']?></p>
          </label>
        </div>
        <hr class="d-lg-none d-block mx-auto my-3 w-75">
        <div class="col-lg-6 card-body position-relative p-3">
          <!-- TITULO -->
          <input class="card-title w-100 text-center text-white text-uppercase fs-3 mb-3" id="tit" name="titulo" placeholder="<?php echo $lang['torneos']['cardT']?>" maxlength="25" minlength="10" autocomplete="off" required></input>
          <!-- DESCRIPCION -->
          <textarea id="descTorneo" name="desc" class="card-desc text-wrap text-uppercase text-center w-100 mt-2 mb-1" style="height: 150px;" maxlength="300" minlength="150" placeholder="<?php echo $lang['torneos']['cardB']?>" required></textarea>
          <hr>
          <!-- RECOMPENSAS -->
          <h3 class="text-uppercase text-danger text-center mt-3"><?php echo $lang['torneos']['cardR']?></h3>
          <div class="row align-items-center w-100 m-0">
            <div class="dropdown col-sm-6 d-flex justify-content-center align-items-center">
              x&nbsp;<input name="cant" type="number" class="w-25" style="font-size: 20px;" max="9" min="1" placeholder="1" required>
              <select class="w-75 text-danger text-uppercase fs-5 p-0 my-2" name="cofre" id="chestSelector" onclick="chests();" required>
                <option value="">...</option>
              </select>
            </div>
            <span class="col-sm-6 text-center text-uppercase fs-4">
              $&nbsp;<input type="number" min="5000" max="9999" maxlength="4" placeholder="5000" class="coins" name="monedas" required>
            </span>
          </div>
          <hr>
          <input type="hidden" name="la" value="<?php echo $_GET['la']?>">
          <input type="submit" class="form-control text-uppercase" value="<?php echo $lang['torneos']['cardS']?>">
        </div>
        <script>
          var img;

          function discardPrev(){
            URL.revokeObjectURL(img);
            $('#preview img').attr('src', '');
            $('#preview').addClass('d-none');
            $('#fileDisplayer').removeClass('d-none');
            $('#fileSelector').val('');
          }

          function chests(){
            $.ajax({
              url: 'modelos/chestSelector.php',
              dataType: 'JSON',
              async: false,

              success: function(cofres){
                cofres.forEach(e=>{
                  $('#chestSelector').append('<option class="text-danger" value="'+e.id+'">'+e.nombre+'</option>');
                })
                $('#chestSelector').attr('onclick', '');
              }
            })
          }
          
          function previousView(input){
            let contentType = input.files[0].type;
            file = input.files[0];

            if(contentType.includes('image')){
              img = URL.createObjectURL(file);
              $('#preview img').attr('src', img);
              $('#preview').removeClass('d-none');
              $('#fileDisplayer').addClass('d-none');
            }
          }

          function verifForm(){
            let form = $('#createCard').serialize();
            let formData = new FormData($('#createCard')[0]);
            console.log($('#createCard'));
            console.log(formData);
            
            $.ajax({
              url: 'modelos/crearTorneo.php',
              method: 'POST',
              data: formData,
              processData: false, 
              contentType: false,

              success: function (res) {
                if (res) {
                  alert('Hubo un error, comunícate con soporte:\n' + res);
                  return;
                }
                location.reload();
              },
            
              error: function (res, status, error) {
                alert('Error en la solicitud: '+ res + status + ' - ' + error);
              }
              });
            }
        </script>
        <style>
          input, textarea{
            border: none;
            background-color: #222022;
            resize: none;
          }
        
          .card-title{
            height: 50px;
          }
        
          .card-title::placeholder {
            color: grey;
            font-size: 30px;
          }
        
          .card-desc::placeholder{
            color: grey;
            font-size: 15px;
          }
        
          .coins::placeholder{
            font-size: 25px;
          }

          #preview {
            position: relative;
            overflow: hidden;
          }
          
          .image-container {
            position: relative;
          }
          
          #preview p{
            opacity: 0;
            color: white;
            transition: all 0.3s ease-in-out;
            position: absolute;
          }

          #preview img {
            transition: filter 0.3s ease-in-out;
          }
          
          #preview .image-container:hover img {
            filter: blur(5px);
          }
          
          #preview .image-container:hover p {
            color: red;
            opacity: 1;
          }
          
        </style>
      </form>
    <?php } ?>
    </div>
  </div>
</div>
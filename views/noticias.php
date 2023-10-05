  <div class="d-flex justify-content-between border-bottom py-1 mx-auto" style="width: 85%;" id="newsPageHeader">
    <h2 class="text-white"><?php echo $lang['noticias']['u']?></h2>
    <?php if(!empty($user) && $user['esMod']){?>
        <a href="?section=crear-noticia&la=<?php echo $_GET['la']?>" class="btn btn-light px-3 py-1 fs-4 text-uppercase"><?php echo $lang['noticias']['add']?></a>
    <?php };?>
  </div>


<?php
  require_once "includes/config.php";
  require_once "modelos/noticias.php";
?>
    <script>var noticias = <?php echo json_encode($noticias)?>;</script>

    <div id="newsFather" class="m-5 mb-0">
        <?php foreach($noticias as $index => $noticia){
                $preImg = explode(',', $noticia['rutas'])[0];?>

                <div class="row my-5" onclick="showPost('<?php echo $index?>');<?php if(!empty($user) && $user['esMod']) echo '$(\'#fNe input[name=la]\').val(\''.$_GET['la'].'\');$(\'#fNe input[name=id]\').val('.$noticia['id'].')'?>" title="click for details" id="new">
                    <img class="col-md-7" style="height: 325px; object-fit: contain;" src="<?php echo $preImg?>" alt="New-Image">
                    <div class="col-md-5" style="height: 200px;">
                        <i class="text-grey fs-5"><?php echo $noticia['fecha_alta']?></i>
                        <h1 style="color: #7BB0FF;" class="text-uppercase fs-2 my-2"><?php echo $noticia['titulo']?></h1>
                        <p class="h-75 overflow-hidden text-white lead"><?php echo $noticia['cuerpo']?></p>
                    </div>
                </div>
                <hr class="bg-primary" style="height: 5px;">

        <?php }?>
    </div>

    <div id="newDetails" class="d-none position-relative w-100">
        <div class="position-absolute left-0 d-flex flex-column">
            <button class="btn btn-light border-0 fs-1 fw-bold ms-1 py-0" onclick="$('#newsPageHeader, #newDetails, #newsFather').toggleClass('d-none');">&#8617;</button>
            <form action="modelos/eliminarNota.php" method="POST" onsubmit="event.preventDefault();" class="mt-2" id="fNe">
                <input type="hidden" value="¿Está seguro de querer eliminar la nota? No podrá deshacer esta acción" id="nTxt">
                <input name="la" type="hidden" value="" id="nTxt">
                <input name="id" type="hidden" value="" id="nTxt">
                <input type="submit" class="btn btn-dark border-0 fs-1 fw-bold ms-1 py-0" onclick="if (confirm($('#nTxt').val())) this.form.submit();" value="&#128465;">
            </form>
        </div>
        <div class="w-75 mx-auto">
            <div class="d-flex align-items-center position-relative w-100 bg-dark overflow-hidden" style="height: 380px; top: -60px;" id="ndCarrusel">
                <button class="position-absolute start-0 text-light btn border-0 fs-4" onclick="lastSlide();"><</button>
                <button class="position-absolute end-0 text-light btn border-0 fs-4" onclick="nextSlide();">></button>
            </div>
            <div class="d-flex justify-content-between border-bottom">
                <h1 style="color: #7BB0FF;" class="my-auto text-uppercase" id="ndTitle">Titulo Noticia</h1>
                <p class="text-muted fs-4 my-auto" id="ndDate">2030/03/23</p>
            </div>
            <p class="text-white mt-2 fs-4" style="margin-bottom: 125px;" id="ndBody">
                Hello and welcome! A while ago we asked on Twitter if you had any questions you’d like us to answer. We took a while to collect the best and most frequently asked questions and prepare some answers for you guys.
            </p>
            
            <div class="d-none d-flex flex-column justify-content-start" id="ndList">
                <h2 class="justify-self-start py-1 mb-4 w-75 border-bottom  text-warning text-uppercase"><?php echo $lang['crear noticia']['q']?></h2>
            </div>
        </div>
    </div>


  
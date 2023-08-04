  <div class="d-flex justify-content-between border-bottom py-1" id="newsPageHeader">
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
    <?php
        foreach($noticias as $index => $noticia){
            $preImg = explode(',', $noticia['rutas'])[0];?>
            <a href="javascript:showPost('<?php echo $index?>');" class="row my-5" style="height: 325px; text-decoration: none;" title="click for details" id="new">
                <div class="col-7 text-center h-100">
                    <img class="img-fluid h-100" style="object-fit: content;" src="<?php echo $preImg?>" alt="img-noticia">
                </div>
                <div class="col-5 text-start d-flex flex-column mt-1 h-100">
                    <i class="text-grey fs-5"><?php echo $noticia['fecha_alta']?></i>
                    <h1 style="color: #7BB0FF;" class="text-uppercase fs-2 my-2"><?php echo $noticia['titulo']?></h1>
                    <p class="h-75 overflow-hidden text-white lead"><?php echo $noticia['cuerpo']?></p>
                </div>
            </a>
            <hr class="bg-primary" style="height: 5px;">
    <?php }?>
    </div>
 
    <div id="newDetails" class="d-none position-relative m-4">
        <div class="d-flex align-items-center position-relative w-100 bg-dark overflow-hidden" style="height: 380px; top: -60px;" id="ndCarrusel">
            <button class="position-absolute start-0 text-light btn border-0 fs-4" onclick="lastSlide();"><</button>
            <button class="position-absolute end-0 text-light btn border-0 fs-4" onclick="nextSlide();">></button>
        </div>
        <div class="d-flex justify-content-between border-bottom">
            <h1 style="color: #7BB0FF;" class="my-auto text-uppercase" id="ndTitle">Titulo Noticia</h1>
            <p class="text-muted fs-4 my-auto">2030/03/23</p>
        </div>
        <p class="text-white mt-2 fs-4" style="margin-bottom: 125px;" id="ndBody">
            Hello and welcome! A while ago we asked on Twitter if you had any questions you’d like us to answer. We took a while to collect the best and most frequently asked questions and prepare some answers for you guys.
        </p>
        
        <div class="d-none d-flex flex-column justify-content-start" id="ndList">
            <h2 class="justify-self-start py-1 mb-4 w-75 border-bottom  text-warning text-uppercase"><?php echo $lang['crear noticia']['q']?></h2>
        </div>
    </div>


  
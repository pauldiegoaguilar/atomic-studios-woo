<div class="row position-relative w-100 m-0">
    <img src="img/over_ocean.jpg" alt="IMAGE" class="img-fluid p-0">
    <div class="woo text-center position-absolute top-50 start-50 translate-middle p-0">
        <div class="availablePc d-flex flex-column align-items-center justify-content-center position-absolute start-50 translate-middle-x p-0" style="bottom: 15%;">
            <p class="fs-6 my-1" style="color: #403a44;"><?php echo $lang['war over ocean']['title']?></p>
            <div class="d-flex align-items-center justify-content-center py-1 px-4" style="background-color: #000000; border-radius: 15px;">
                <img src="img/pc-icon.png" alt="pc-icon" style="height: 3rem; filter: invert(100%) brightness(1.75);">
                <div class="text-white align-self-center fs-4">PC</div>
            </div>
        </div>
    </div>
</div>

<!--    USUARIOS     -->
<?php if(!$user || !$user['esMod']){?>
<div class="row m-4">
    <iframe class="col-lg-8 position-relative p-0" style="top: -40px;" height="420" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="col-lg-4 px-5 d-flex flex-column">
        <h1 style="color: #7BB0FF;"><?php echo $lang['war over ocean']['txtSec1t']?></h1>
        <hr>
        <p class="lead">
            <?php echo $lang['war over ocean']['txtSec1b']?>
        </p>
    </div>
</div>

<div class="row d-flex justify-content-lg-around m-5">
    <div class="row col-lg-4 d-flex flex-lg-column m-lg-0 mb-2">
        <div class="col-lg-12 col-sm-6 col-0 p-0">
            <img src="img/cartel.png" alt="img" class="h-100 w-100">
        </div>
        <div class="col-lg-12 col-sm-6 col-12 d-flex flex-column text-center align-items-center text-cartel flex-grow-1">
            <p class="fs-4 m-0 mt-2"><?php echo $lang['war over ocean']['txtSec2t']?></p>
            <div style="height: 5px; width: 80%; border-bottom: 2px solid #1B191B;"></div>
            <p class="lead mt-2"><?php echo $lang['war over ocean']['txtSec2b']?></p>
        </div>
    </div>
    <div class="row col-lg-4 d-flex flex-lg-column m-lg-0 mb-2">
        <div class="col-lg-12 col-sm-6 col-0 p-0">
            <img src="img/cartel.png" alt="img" class="h-100 w-100">
        </div>
        <div class="col-lg-12 col-sm-6 col-12 d-flex flex-column text-center align-items-center text-cartel flex-grow-1">
            <p class="fs-4 m-0 mt-2"><?php echo $lang['war over ocean']['txtSec3t']?></p>
            <div style="height: 5px; width: 80%; border-bottom: 2px solid #1B191B;"></div>
            <p class="lead mt-2"><?php echo $lang['war over ocean']['txtSec3b']?></p>
        </div>
    </div>
    <div class="row col-lg-4 d-flex flex-lg-column">
        <div class="col-lg-12 col-sm-6 col-0 p-0">
            <img src="img/cartel.png" alt="img" class="h-100 w-100">
        </div>
        <div class="col-lg-12 col-sm-6 col-12 d-flex flex-column text-center align-items-center text-cartel flex-grow-1">
            <p class="fs-4 m-0 mt-2"><?php echo $lang['war over ocean']['txtSec4t']?></p>
            <div style="height: 5px; width: 80%; border-bottom: 2px solid #1B191B;"></div>
            <p class="lead mt-2"><?php echo $lang['war over ocean']['txtSec4b']?></p>
        </div>
    </div>
</div>
<?php return; }?>
<!--    MODERADORES     -->
<div class="row m-4" id="mainPageContTxt">
    <iframe class="col-lg-8 position-relative p-0" style="top: -40px;" height="420" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="col-lg-4 px-5 d-flex flex-column">
        <p name="txtSec1t" contenteditable="true" class="display-6" style="color: #7BB0FF;"><?php echo $lang['war over ocean']['txtSec1t']?></p>
        <hr>
        <p class="lead" name="txtSec1b" contenteditable="true"><?php echo $lang['war over ocean']['txtSec1b']?></p>
    </div>
</div>

<div class="row d-flex justify-content-lg-around m-5" id="mainPageContTxt">
    <div class="row col-lg-4 d-flex flex-lg-column m-lg-0 mb-2">
        <div class="col-lg-12 col-sm-6 col-0 p-0">
            <img src="img/cartel.png" alt="img" class="h-100 w-100">
        </div>
        <div class="col-lg-12 col-sm-6 col-12 d-flex flex-column text-center align-items-center text-cartel flex-grow-1">
            <p name="txtSec2t" contenteditable="true" class="fs-4 m-0 mt-2"><?php echo $lang['war over ocean']['txtSec2t']?></p>
            <div style="height: 5px; width: 80%; border-bottom: 2px solid #1B191B;"></div>
            <p name="txtSec2b" contenteditable="true" class="lead mt-2"><?php echo $lang['war over ocean']['txtSec2b']?></p>
        </div>
    </div>
    <div class="row col-lg-4 d-flex flex-lg-column m-lg-0 mb-2">
        <div class="col-lg-12 col-sm-6 col-0 p-0">
            <img src="img/cartel.png" alt="img" class="h-100 w-100">
        </div>
        <div class="col-lg-12 col-sm-6 col-12 d-flex flex-column text-center align-items-center text-cartel flex-grow-1">
            <p name="txtSec3t" contenteditable="true" class="fs-4 m-0 mt-2"><?php echo $lang['war over ocean']['txtSec3t']?></p>
            <div style="height: 5px; width: 80%; border-bottom: 2px solid #1B191B;"></div>
            <p name="txtSec3b" contenteditable="true" class="lead mt-2"><?php echo $lang['war over ocean']['txtSec3b']?></p>
        </div>
    </div>
    <div class="row col-lg-4 d-flex flex-lg-column">
        <div class="col-lg-12 col-sm-6 col-0 p-0">
            <img src="img/cartel.png" alt="img" class="h-100 w-100">
        </div>
        <div class="col-lg-12 col-sm-6 col-12 d-flex flex-column text-center align-items-center text-cartel flex-grow-1">
            <p name="txtSec4t" contenteditable="true" class="fs-4 m-0 mt-2"><?php echo $lang['war over ocean']['txtSec4t']?></p>
            <div style="height: 5px; width: 80%; border-bottom: 2px solid #1B191B;"></div>
            <p name="txtSec4b" contenteditable="true" class="lead mt-2"><?php echo $lang['war over ocean']['txtSec4b']?></p>
        </div>
    </div>
</div>

<input type="hidden" value="<?php echo $lang['war over ocean']['title']?>" id="apN" >
<input type="hidden" value="<?php echo $_GET['la']?>" id="language" >
<input type="hidden" value="<?php echo $lang['errors']['alertPage']?>" id="alertMsg" >
<input type="submit" placeholder="<?php echo $lang['input']['submit1']?>" class="form-control" onclick="submitForm('mainPageContTxt');">
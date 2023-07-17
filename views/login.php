<div class="w-auto h-auto bg-white" style="z-index: 1; border-radius: 15px;">
    <p style="color: #013c70;" class="display-4 text-uppercase p-5 text-center"><?php echo $lang['login']['i']?></p>

    <div class="form-outline form-white m-4 input-div">
        <input style="background-color: #9cbfdd;" type="email" id="typeEmailX" class="form-control form-control-lg mb-4 p-3" placeholder="<?php echo $lang['login']['cor']?>" />
        <input style="background-color: #9cbfdd;" type="password" id="typePasswordX" class="form-control form-control-lg p-3" placeholder="<?php echo $lang['login']['con']?>" />
    </div>

    <div class="d-flex justify-content-around m-4 text-center">
        <a style="color: #013c70;" class="col-sm-6 text-start text-decoration-none fs-6" href="?section=registro&la=<?php echo $_GET['la']?>"><?php echo $lang['login']['r']?></a>
        <a style="color: #013c70;" class="col-sm-6 text-end text-decoration-none fs-6" href="?section=recuperar&la=<?php echo $_GET['la']?>"><?php echo $lang['login']['o']?></a>
    </div>

    <div class="form-check d-flex justify-content-start m-4">
        <input style="background-color: #9cbfdd; border-radius: 5px;" class="form-check-input p-3 me-2" type="checkbox" value="" id="form1Example3"/>
        <label style="color: #013c70;" class="fs-5 form-check-label" for="form1Example3"><?php echo $lang['login']['p']?></label>
    </div>

    <div class="text-center">
        <input class="text-white fs-5 btn btn-outline-dark btn-lg px-5 mb-4" type="submit" value="<?php echo $lang['input']['submit2']?>" style="background-color: #013c70;" />
    </div>
</div>

<div class="w-auto h-auto bg-white" style="z-index: 1; border-radius: 15px;">
    <form onsubmit="event.preventDefault(); verifLogin(this);">
        <p style="color: #013c70;" class="display-4 fw-bold text-uppercase px-5 pt-5 text-center"><?php echo $lang['login']['i']?></p>
    
        <div class="form-outline form-white m-4 input-div">
            <input style="background-color: #9cbfdd;" type="email" id="typeEmailX" name="emailL" autocomplete="off" class="form-control form-control-lg mb-4" value="<?php echo (isset($_COOKIE['email'])) ? $_COOKIE['email'] : '' ?>" placeholder="<?php echo $lang['login']['cor']?>" />
            <input style="background-color: #9cbfdd;" type="password" id="typePasswordX" name="passL" class="form-control form-control-lg" value="<?php echo (isset($_COOKIE['pass'])) ? $_COOKIE['pass'] : '' ?>" placeholder="<?php echo $lang['login']['con']?>" />
            <p class="row text-center fs-5 m-0 pt-0 lh-1 my-2" id="errorLog" style="color: rgb(182 190 197 / 80%); display: none;">Correo electronico y/o contraseña incorrectos</p>
            <p class="row text-center fs-5 m-0 pt-0 lh-1 my-2" id="successLog" style="color: #013c70; display: none;">Has iniciado sesion correctamente</p>
        </div>
    
        <div class="d-flex justify-content-around m-4 text-center">
            <a style="color: #013c70;" class="col-sm-6 text-start text-decoration-none fs-6" href="?section=registro&la=<?php echo $_GET['la']?>"><?php echo $lang['login']['r']?></a>
            <a style="color: #013c70;" class="col-sm-6 text-end text-decoration-none fs-6" href="?section=recuperar&la=<?php echo $_GET['la']?>"><?php echo $lang['login']['o']?></a>
        </div>
    
        <div class="form-check d-flex justify-content-start align-items-center m-4">
            <input style="background-color: #9cbfdd; border-radius: 5px;" class="form-check-input p-3 me-2" type="checkbox" <?php echo (isset($_COOKIE['remind'])) ? $_COOKIE['remind'] : '' ?> value="SI" name="remind" id="form1Example3"/>
            <label style="color: #013c70;" class="fs-5 form-check-label" for="form1Example3"><?php echo $lang['login']['p']?></label>
        </div>
    
        <div class="text-center">
            <input class="text-white fs-5 btn btn-lg px-5 mb-4" type="submit" value="<?php echo $lang['input']['submit2']?>" style="background-color: #013c70;" />
        </div>
    </form>
</div>

<div class="w-auto h-auto bg-white" style="z-index: 1; border-radius: 15px;">
    <div> <!-- mb-md-4 --> 
        <form onsubmit="event.preventDefault(); verifRegis(this);" id="formRegis">
            <h2 style="color: #013c70;" class="display-4 fw-bold text-uppercase px-5 pt-5 text-center"><?php echo $lang['registro']['c']?></h2>
            <h2 style="color: #013c70;" id="dataVerif" class="d-none fs-4 fw-bold mb-2 text-primary text-uppercase text-center p-2"><?php echo $lang['registro']['v']?></h2>
            <h2 style="color: #013c70;" id="successReg" class="d-none fs-4 fw-bold mb-2 text-success text-uppercase text-center p-2"><?php echo $lang['registro']['t']?></h2>

            <div class="form-outline form-white m-4 input-div">
                <input style="background-color: #9cbfdd;" type="text" autocomplete="off" id="typeUsernameX" class="form-control form-control-lg mb-1"
                    name="nomR" placeholder="<?php echo $lang['placeholder']['usname']?>" />
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-nomR" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['d']?></p>
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-nomRe" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['n']?></p>
                <input style="background-color: #9cbfdd;" type="email" autocomplete="off" id="typeEmailX" class="form-control form-control-lg mb-1"
                    name="emailR" placeholder="<?php echo $lang['placeholder']['correo']?>"/>
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-emailR" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['nc']?></p>
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-emailRe" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['m']?></p>
                <input style="background-color: #9cbfdd;" type="password" id="typePasswordX" class="form-control form-control-lg mb-1"
                    name="passR" placeholder="<?php echo $lang['placeholder']['pass']?>" />
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-passR" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['dy']?></p>
                <a style="color: #013c70;" class="fs-5 text-decoration-none" href="?section=login&la=<?php echo $_GET['la']?>"><?php echo $lang['registro']['y']?></a>
            </div>

            <div class="p-4 text-center">
                <input class="text-white fs-5 btn btn-lg px-5 mb-4" 
                style="background-color: #013c70;" type="submit" name="regi" value="<?php echo $lang['input']['submit2']?>" />
            </div>
        </form>
    </div>
</div>

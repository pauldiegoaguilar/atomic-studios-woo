<div class="w-auto h-auto bg-white rounded-2" style="z-index: 1;">
    <div> <!-- mb-md-4 --> 
        <form onsubmit="event.preventDefault(); verifRegis(this);" id="formRegis">                           
            <h2 style="color: #013c70;" class="display-4 fw-bold mb-2 text-uppercase text-center p-4"><?php echo $lang['registro']['c']?></h2>
            <h2 style="color: #013c70;" id="dataVerif" class="d-none fs-4 fw-bold mb-2 text-primary text-uppercase text-center p-2"><?php echo $lang['registro']['v']?></h2>
            <h2 style="color: #013c70;" id="successReg" class="d-none fs-4 fw-bold mb-2 text-success text-uppercase text-center p-2"><?php echo $lang['registro']['t']?></h2>

            <div class="form-outline form-white m-4">
                <input style="background-color: #9cbfdd;" type="text" id="typeUsernameX" class="fs-3 mb-1 form-control form-control-lg"
                    name="nomR" placeholder="<?php echo $lang['placeholder']['usname']?>" />
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-nomR" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['d']?></p>
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-nomRe" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['n']?></p>
                <input style="background-color: #9cbfdd;" type="email" id="typeEmailX" class="fs-3 mb-1 form-control form-control-lg"
                    name="emailR" placeholder="<?php echo $lang['placeholder']['correo']?>"/>
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-emailR" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['nc']?></p>
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-emailRe" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['m']?></p>
                <input style="background-color: #9cbfdd;" type="password" id="typePasswordX" class="fs-3 mb-1 form-control form-control-lg"
                    name="passR" placeholder="<?php echo $lang['placeholder']['pass']?>" />
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-passR" style="color: rgb(182 190 197 / 80%);"><?php echo $lang['registro']['dy']?></p>
                <a style="color: #013c70;" class="fs-5 text-decoration-none" href="?section=login&la=<?php echo $_GET['la']?>"><?php echo $lang['registro']['y']?></a>
            </div>

            <div class="p-4 text-center">
                <input class="text-white fs-1 btn btn-outline-dark btn-lg px-5" 
                style="background-color: #013c70;" type="submit" name="regi" value="<?php echo $lang['input']['submit2']?>" />
            </div>
        </form>
    </div>
</div>

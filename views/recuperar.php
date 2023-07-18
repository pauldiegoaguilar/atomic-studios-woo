<?php 
    session_start();
    if(empty($_SESSION)){
?>
    <div class="w-auto h-auto bg-white" style="z-index: 1; border-radius: 15px;">
        <div class="mb-md-5"> 
            <h2 style="color: #013c70; font-size: 45px;" class="fw-bold m-4 text-uppercase text-center"><?php echo $lang['recuperar']['title']?></h2>
            <div class="form-outline form-white m-4 input-div text-center">
                <h5 class="p-4"><?php echo $lang['recuperar']['e']?></h5>
                <input type="email" id="typeEmailX" placeholder="<?php echo $lang['placeholder']['correo']?>" class="form-control form-control-lg mb-3" style="background-color: #9cbfdd;" popups="none"/>
                <!--    Mensajes de error   -->
                <p class="d-none text-center text-success lead" id="email-success-recup"><?php echo $lang['errors']['success']?></p>
                <p class="d-none text-center text-success lead" id="email-gen-recup"><?php echo $lang['errors']['genCode']?></p>
                <p class="d-none text-center text-danger lead" id="email-error-reg"><?php echo $lang['errors']['correo']?></p>
                <p class="d-none text-center text-danger lead" id="email-error-format"><?php echo $lang['errors']['format']?></p>
                <p class="d-none text-center text-danger lead" id="email-error-qry"><?php echo $lang['erros']['qry']?></p>
                <!---------------------------->
                <a href="javascript:verifEmail();" class="btn btn-lg px-5 text-white fs-2" style="background-color: #013c70;"><?php echo $lang['input']['submit1']?></a>
            </div>
        </div>
    </div>
<?php } else{?>
    <div class="w-auto h-auto bg-white" style="z-index: 1; border-radius: 15px;">
        <div> <!-- mb-md-4 -->
            <h2 style="color: #013c70;" class="fw-bold mb-2 text-uppercase text-center p-4 fs-1"><?php echo $lang['recuperar']['title']?></h2>
            <h5 class="text-center p-3"><?php echo $lang['recuperar']['ec']?></h5>
            <div class="d-flex justify-content-center form-outline form-white mb-4 input-div" id="selector-identif">
                <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCodeX" class="form-control form-control-lg" placeholder="1" maxlength="1" />
                <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCodeX" class="form-control form-control-lg" placeholder="2" maxlength="1" />
                <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCodeX" class="form-control form-control-lg" placeholder="3" maxlength="1" />
                <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCodeX" class="form-control form-control-lg" placeholder="4" maxlength="1" />
                <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCodeX" class="form-control form-control-lg" placeholder="5" maxlength="1" />
                <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCodeX" class="form-control form-control-lg" placeholder="6" maxlength="1" />
            </div>
            <p class="d-none text-center text-success lead" id="verificador-success"><?php echo $lang['errors']['successCode']?></p>
            <p class="d-none text-center text-success lead" id="verificador-iden"><?php echo $lang['errors']['verif']?></p>
            <p class="d-none text-center text-danger lead" id="verificador-format"><?php echo $lang['errors']['inv']?></p>
            <p class="d-none text-center text-danger lead" id="verificador-deprecated"><?php echo $lang['errors']['deprecatedCode']?></p>
            <p class="d-none text-center text-danger lead" id="verificador-incorrect"><?php echo $lang['errors']['incorrectCode']?></p>

            <div class="text-center m-3">
                <a href="javascript:verifCode();" class="btn btn-lg px-5 fs-2" style="background-color: #013c70; color: white;"><?php echo $lang['input']['submit1']?></a>
            </div>
            <a href="modelos/destroyer.php?s=recuperar&la=<?php echo $_GET['la']?>" class="ps-3"><?php echo $lang['recuperar']['a']?></a>
        </div>
    </div>
<?php }?>
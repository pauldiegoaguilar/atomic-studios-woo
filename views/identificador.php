<?php 
    session_start();
    if(!empty($_SESSION)){
?>

        <div class="w-auto h-auto bg-white rounded" style="z-index: 1;">
            <div> <!-- mb-md-4 -->
                <h2 style="color: #013c70;" class="fw-bold mb-2 text-uppercase text-center p-4 fs-1">Recuperacion de Cuenta</h2>
                <h5 class="text-center p-3">Escribe el codigo que te enviamos</h5>
                <div class="d-flex justify-content-center form-outline form-white mb-4 input-div" id="selector-identif">
                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode0X" class="form-control form-control-lg" placeholder="1" maxlength="1" />
                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode1X" class="form-control form-control-lg" placeholder="2" maxlength="1" />
                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode2X" class="form-control form-control-lg" placeholder="3" maxlength="1" />
                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode3X" class="form-control form-control-lg" placeholder="4" maxlength="1" />
                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode4X" class="form-control form-control-lg" placeholder="5" maxlength="1" />
                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode5X" class="form-control form-control-lg" placeholder="6" maxlength="1" />
                </div>
                <p class="text-center text-success lead" id="verificador-iden"></p>
                <div class="text-center m-3">
                    <a href="javascript:verifCode();" class="btn btn-outline-dark btn-lg px-5 fs-2" style="background-color: #013c70; color: white;">Enviar</a>
                </div>
            </div>
        </div>

<?php } 
    else 
    { 
        header('Location: index.php');
    }
?>
<?php 
    session_start();
    if(!empty($_SESSION)){
?>
    <section class="vh-100 gradient-custom bg-text">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-white text-info" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center" style="height: 460px;">
                            <div class="mb-md-5"> <!-- mb-md-4 -->
                                <h2 style="color: #013c70; font-size: 45px;" class="fw-bold mb-2 text-uppercase">Recuperacion de Cuenta</h2>
                                <h5 style="margin: 30px 0;">Escribe el codigo que te enviamos</h5>
                                <div class="d-flex justify-content-center form-outline form-white mb-4 input-div" id="selector-identif">
                                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode0X" class="form-control form-control-lg" placeholder="1" maxlength="1" />
                                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode1X" class="form-control form-control-lg" placeholder="2" maxlength="1" />
                                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode2X" class="form-control form-control-lg" placeholder="3" maxlength="1" />
                                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode3X" class="form-control form-control-lg" placeholder="4" maxlength="1" />
                                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode4X" class="form-control form-control-lg" placeholder="5" maxlength="1" />
                                    <input style="background-color: #9cbfdd; font-size: 35px; width: 50px; margin: 0 2.5px;" type="text" id="typeCode5X" class="form-control form-control-lg" placeholder="6" maxlength="1" />
                                </div>
                                <p class="text-center text-success lead" id="verificador-iden"></p>
                                <a href="javascript:verifCode();" class="btn btn-outline-dark btn-lg px-5" style="background-color: #013c70; color: white; font-size: 40px;">Enviar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } 
    else 
    { 
        header('Location: index.php');
    }
?>
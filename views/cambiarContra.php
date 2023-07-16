<?php 
    session_start();
    if($_SESSION['code'] == $_GET['v']){
?>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-white text-info" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center" style="height: 490px;">
                        <div class="mb-md-5"> <!-- mb-md-4 -->
                            <h2 style="color: #1d3b55;" class="fs-1 fw-bold mb-2 text-uppercase pb-3">Recuperacion de Cuenta</h2>
                            <div  class="form-outline form-white input-div">
                                <h5>Cambia tu contraseña</h5>
                                <input type="hidden" id="constructor-id" value="">
                                <input onkeyup="getChar(this.value);" style="background-color: #9cbfdd; font-size: 25px;" type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Contraseña" />
                                <p class="row text-start fs-6 m-0 pt-2 lh-1" style="color: rgb(182 190 197 / 80%);"><i id="error-password"></i></p>
                            </div>
                            <div  class="form-outline form-white mb-4 input-div mt-2">
                                <input style="background-color: #9cbfdd; font-size: 25px;" type="password" id="typePasswordConfirmX" class="form-control form-control-lg" placeholder="Confirmar Contraseña" />
                            </div>
                            <p class="text-center text-sucess lead d-none" id="verifiedPass">Se ha cambiado la contraseña</p>
                            <a href="javascript:confirmPassword();" class="btn btn-outline-dark btn-lg px-5 fs-1" style="background-color: #013c70; color: white;">Confirmar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } 
    else 
    { 
        header('Location: index.php');
    }
?>
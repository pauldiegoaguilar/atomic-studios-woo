<section class="vh-100 gradient-custom bg-text">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-white text-info" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center" style="height: 570px;">
                        <div class="mb-md-5"> <!-- mb-md-4 -->
                            <form action="modelos/funcion-reg.php" method="POST">
                            
                                <h2 style="color: #013c70; font-size: 45px;" class="fw-bold mb-2 text-uppercase pb-5">Crear una cuenta</h2>

                                <div class="form-outline form-white mb-4">
                                    <input style="background-color: #9cbfdd; font-size: 25px;" type="text" id="typeUsernameX" class="form-control form-control-lg"
                                        name="nomR" placeholder="Nombre de Usuario" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input style="background-color: #9cbfdd; font-size: 25px;" type="email" id="typeEmailX" class="form-control form-control-lg"
                                        name="emailR" placeholder="Correo Electronico" />
                                </div>

                                <div  class="form-outline form-white mb-4">
                                    <input style="background-color: #9cbfdd; font-size: 25px;" type="password" id="typePasswordX" class="form-control form-control-lg"
                                        name="passR" placeholder="Contraseña" />
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <a style="color: #013c70; font-size: 21px;" class="text-decoration-none" href="?section=login">¿Ya tienes una cuenta? Inicia sesion</a>
                                </div>

                                <input class="btn btn-outline-dark btn-lg px-5" type="submit" 
                                style="background-color: #013c70; color: white; font-size: 40px;" name="regi" value="Conectarse" />

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
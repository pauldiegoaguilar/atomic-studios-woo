<div class="w-auto h-auto bg-white rounded-2" style="z-index: 1;">
    <div> <!-- mb-md-4 -->
        <form action="modelos/funcion-reg.php" method="POST">
                            
            <h2 style="color: #013c70;" class="display-4 fw-bold mb-2 text-uppercase text-center p-5">Crear una cuenta</h2>

            <div class="form-outline form-white m-4">
                <input style="background-color: #9cbfdd;" type="text" id="typeUsernameX" class="fs-3 mb-2 form-control form-control-lg"
                    name="nomR" placeholder="Nombre de Usuario" />
                <input style="background-color: #9cbfdd;" type="email" id="typeEmailX" class="fs-3 mb-2 form-control form-control-lg"
                    name="emailR" placeholder="Correo Electronico" />
                <input style="background-color: #9cbfdd;" type="password" id="typePasswordX" class="fs-3 mb-2 form-control form-control-lg"
                    name="passR" placeholder="Contraseña" />
                <a style="color: #013c70;" class="fs-5 text-decoration-none" href="?section=login">¿Ya tienes una cuenta? Inicia sesion</a>
            </div>

            <div class="p-4 text-center">
                <input class="text-white fs-1 btn btn-outline-dark btn-lg px-5" type="submit" 
                style="background-color: #013c70;" name="regi" value="Conectarse" />
            </div>

        </form>
    </div>
</div>

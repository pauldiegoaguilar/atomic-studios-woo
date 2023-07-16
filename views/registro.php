<div class="w-auto h-auto bg-white" style="z-index: 1; border-radius: 15px;">
    <div> <!-- mb-md-4 --> 
        <form onsubmit="event.preventDefault(); verifRegis(this);" id="formRegis">
            <h2 style="color: #013c70;" class="display-4 fw-bold px-5 pt-5 text-center">CREAR CUENTA</h2>
            <h2 style="color: #013c70; display: none;" id="successReg" class="fs-4 fw-bold mb-2 text-success text-uppercase text-center p-2">Te has registrado correctamente, ¡Inicia Sesion!</h2>

            <div class="form-outline form-white m-4 input-div">
                <input style="background-color: #9cbfdd;" type="text" autocomplete="off" id="typeUsernameX" class="form-control form-control-lg mb-1"
                    name="nomR" placeholder="Nombre de Usuario" />
                    <p class="row text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-nomR" style="color: rgb(182 190 197 / 80%); display: none;">Debe ser menor a 15 caracteres</p>
                    <p class="row text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-nomRe" style="color: rgb(182 190 197 / 80%); display: none;">Nombre ya registrado, elige otro</p>
                <input style="background-color: #9cbfdd;" type="email" autocomplete="off" id="typeEmailX" class="form-control form-control-lg mb-1"
                    name="emailR" placeholder="Correo Electronico"/>
                    <p class="row text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-emailR" style="color: rgb(182 190 197 / 80%); display: none;">No cumple con formato gmail</p>
                    <p class="row text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-emailRe" style="color: rgb(182 190 197 / 80%); display: none;">Mail ya registrado, elige otro</p>
                <input style="background-color: #9cbfdd;" type="password" id="typePasswordX" class="form-control form-control-lg mb-1"
                    name="passR" placeholder="Contraseña" />
                    <p class="row text-start fs-6 m-0 pt-0 lh-1 mb-3" id="error-passR" style="color: rgb(182 190 197 / 80%); display: none;">Debe ser menor a 20 caracteres, alfanumerico y al menos 3 caracteres especiales</p>
                <a style="color: #013c70;" class="fs-5 text-decoration-none" href="?section=login">¿Ya tienes una cuenta? Inicia sesion</a>
            </div>

            <div class="p-4 text-center">
                <input class="text-white fs-5 btn btn-lg px-5 mb-4" 
                style="background-color: #013c70;" type="submit" name="regi" value="Conectarse" />
            </div>
        </form>
    </div>
</div>

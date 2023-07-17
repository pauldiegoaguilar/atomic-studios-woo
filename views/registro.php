<div class="w-auto h-auto bg-white rounded-2" style="z-index: 1;">
    <div> <!-- mb-md-4 --> 
        <form onsubmit="event.preventDefault(); verifRegis(this);" id="formRegis">                           
            <h2 style="color: #013c70;" class="display-4 fw-bold mb-2 text-uppercase text-center p-4">Crear una cuenta</h2>
            <h2 style="color: #013c70;" id="dataVerif" class="d-none fs-4 fw-bold mb-2 text-primary text-uppercase text-center p-2">Verificando...</h2>
            <h2 style="color: #013c70;" id="successReg" class="d-none fs-4 fw-bold mb-2 text-success text-uppercase text-center p-2">Te has registrado correctamente, inicia sesion</h2>

            <div class="form-outline form-white m-4">
                <input style="background-color: #9cbfdd;" type="text" id="typeUsernameX" class="fs-3 mb-1 form-control form-control-lg"
                    name="nomR" placeholder="Nombre de Usuario" />
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-nomR" style="color: rgb(182 190 197 / 80%);">Debe ser menor a 15 caracteres</p>
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-nomRe" style="color: rgb(182 190 197 / 80%);">Nombre ya registrado, elige otro</p>
                <input style="background-color: #9cbfdd;" type="email" id="typeEmailX" class="fs-3 mb-1 form-control form-control-lg"
                    name="emailR" placeholder="Correo Electronico"/>
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-emailR" style="color: rgb(182 190 197 / 80%);">No cumple con formato mail</p>
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-emailRe" style="color: rgb(182 190 197 / 80%);">Mail ya registrado, elige otro</p>
                <input style="background-color: #9cbfdd;" type="password" id="typePasswordX" class="fs-3 mb-1 form-control form-control-lg"
                    name="passR" placeholder="Contraseña" />
                    <p class="row d-none text-start fs-6 m-0 pt-0 lh-1" id="error-passR" style="color: rgb(182 190 197 / 80%);">Debe ser menor a 20 caracteres y contenter al menos 3 caracteres numericos, letras y especiales</p>
                <a style="color: #013c70;" class="fs-5 text-decoration-none" href="?section=login">¿Ya tienes una cuenta? Inicia sesion</a>
            </div>

            <div class="p-4 text-center">
                <input class="text-white fs-1 btn btn-outline-dark btn-lg px-5" 
                style="background-color: #013c70;" type="submit" name="regi" value="Conectarse" />
            </div>
        </form>
    </div>
</div>

<div class="text-center w-50 mx-auto">
    <p class="paragraph">Llene el siguiente formulario para ponerte en contacto con nosotros.</p>
    <img src="img/logo.png" alt="logo" class="img-fluid" style="max-width: 60px; height: auto; rotate: -90deg;">
    <form action="">
        <div class="paragraph" style="margin-top: 10px;">
            <p for="inputPassword" style="text-align: left !important;" class="mt-2">Nombre de Usuario</p>
            <input type="text" class="form-control text-light" style="background-color: #2B282C;" id="inputPassword" value="<?php echo isset($user) ? $user['nombre'] : '' ; ?>" placeholder="ZIKARIOGAY">

            <p for="email" style="text-align: left !important;" class="text-left mt-2">Correo Electronico</p>
            <input type="email" name="email" class="form-control text-light text-truncate" style="background-color: #2B282C;" id="email" value="<?php echo isset($user) ? $user['email'] : '' ; ?>" placeholder="YourGameMailExample@gmail.com">

            <p for="asuntos" style="text-align: left !important;" class="text-left mt-2">Asunto</p>
            <select name="asuntos" class="form-control text-light" style="background-color: #2B282C;" id="asuntos">
                <option value="0" selected>Seleccionar...</option>
                <option value="1">Reportar usuario</option>
                <option value="2">Reportar Bug</option>
                <option value="3">Otros</option>
            </select>

            <p for="mensaje" style="text-align: left !important;" class="text-left mt-2">Mensaje</p>
            <textarea name="mensaje" id="mensaje" class="form-control text-light" style="background-color: #2B282C;" cols="30" rows="7"></textarea>
        </div>

        <input type="submit" class="btn btn-outline-light mt-3 mb-5 border-light" value="Enviar">
    </form>
</div>
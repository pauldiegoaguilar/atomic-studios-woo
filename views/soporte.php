<div class="text-center w-50 mx-auto">
    <p class="paragraph"><?php echo $lang['soporte']['txtSec1t']?></p>
    <img src="img/logo.png" alt="logo" class="img-fluid" style="max-width: 60px; height: auto; rotate: -90deg;">
        <div class="paragraph" style="margin-top: 10px;">
            <p for="inputPassword" style="text-align: left !important;" class="mt-2"><?php echo $lang['soporte']['n']?></p>

            <input type="text" class="form-control text-light" style="background-color: #2B282C;" id="inputPassword" placeholder="<?php echo $lang['placeholder']['nick']?>">

            <p for="email" style="text-align: left !important;" class="text-left mt-2"><?php echo $lang['soporte']['c']?></p>
            <input type="email" name="email" class="form-control text-light text-truncate" style="background-color: #2B282C;" id="email" placeholder="<?php echo $lang['placeholder']['mail']?>">

            <p for="asuntos" style="text-align: left !important;" class="text-left mt-2"><?php echo $lang['soporte']['a']?></p>
            <select name="asuntos" class="form-control text-light" style="background-color: #2B282C;" id="asuntos">
                <option value="0" selected><?php echo $lang['soporte']['s']?></option>
                <option value="1"><?php echo $lang['soporte']['ru']?></option>
                <option value="2"><?php echo $lang['soporte']['rb']?></option>
                <option value="3"><?php echo $lang['soporte']['o']?></option>
            </select>

            <p for="mensaje" style="text-align: left !important;" class="text-left mt-2"><?php echo $lang['soporte']['m']?></p>
            <textarea name="mensaje" id="mensaje" class="form-control text-light" style="background-color: #2B282C;" cols="30" rows="7"></textarea>
        </div>

        <input type="submit" class="btn btn-outline-light mt-3 mb-5 border-light" value="<?php echo $lang['input']['submit1']?>">
</div>
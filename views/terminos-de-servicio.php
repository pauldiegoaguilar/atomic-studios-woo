<?php if(!$user || !$user['esMod']){ ?>
    <div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;">  
  
    <p class="text-white display-6"><?php echo $lang['terminos de servicio']['txtSec1t']?></p>
    <p>
        <?php echo $lang['terminos de servicio']['txtSec1b']?>
    </p>

    <p class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec2t']?></p>
    <p>
        <?php echo $lang['terminos de servicio']['txtSec2b']?>
    </p>

    <p class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec3t']?></h2>
    <p>
        <?php echo $lang['terminos de servicio']['txtSec3b']?>
    </p>

    <p class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec4t']?></h2>
    <p>
        <?php echo $lang['terminos de servicio']['txtSec4b']?>
    </p>

    <p class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec5t']?></h2>
    <p>
        <?php echo $lang['terminos de servicio']['txtSec5b']?>
    </p>

    <p class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec6t']?></h2>
    <p> 
        <?php echo $lang['terminos de servicio']['txtSec6b']?>
    </p>

    <p class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec7t']?></h2>
    <p>
        <?php echo $lang['terminos de servicio']['txtSec7ba']?>
    </p>

    <div>
        <?php echo $lang['terminos de servicio']['txtSec7bd']?>
        <a href="?section=soporte&la=<?php echo $_GET['la'];?>" class="text-white"><?php echo $lang['terminos de servicio']['txtSec7bs']?></a>.
    </div>

    <p>
        <?php echo $lang['terminos de servicio']['txtSec8']?>
    </p>
    </div>
<?php return; }?>

<div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;" id="termsContTxt">  

    <p name="txtSec1t" contenteditable="true" class="text-white display-6"><?php echo $lang['terminos de servicio']['txtSec1t']?></p>
    <p name="txtSec1b" contenteditable="true"><?php echo $lang['terminos de servicio']['txtSec1b']?></p>

    <p name="txtSec2t" contenteditable="true" class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec2t']?></p>
    <p name="txtSec2b" contenteditable="true"><?php echo $lang['terminos de servicio']['txtSec2b']?></p>

    <p name="txtSec3t" contenteditable="true" class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec3t']?></p>
    <p name="txtSec3b" contenteditable="true"><?php echo $lang['terminos de servicio']['txtSec3b']?></p>

    <p name="txtSec4t" contenteditable="true" class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec4t']?></p>
    <p name="txtSec4b" contenteditable="true"><?php echo $lang['terminos de servicio']['txtSec4b']?></p>

    <p name="txtSec5t" contenteditable="true" class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec5t']?></p>
    <p name="txtSec5b" contenteditable="true"><?php echo $lang['terminos de servicio']['txtSec5b']?></p>

    <p name="txtSec6t" contenteditable="true" class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec6t']?></p>
    <p name="txtSec6b" contenteditable="true"><?php echo $lang['terminos de servicio']['txtSec6b']?></p>

    <p name="txtSec7t" contenteditable="true" class="text-white fs-2"><?php echo $lang['terminos de servicio']['txtSec7t']?></p>
    <p name="txtSec7ba" contenteditable="true"><?php echo $lang['terminos de servicio']['txtSec7ba']?></p>

    <div class="d-flex">
        <p name="txtSec7bd" contenteditable="true"><?php echo $lang['terminos de servicio']['txtSec7bd']?></p>&nbsp;
        <a href="?section=soporte&la=<?php echo $_GET['la']?>" class="text-white">
            <p name="txtSec7bs"><?php echo $lang['terminos de servicio']['txtSec7bs']?></p>
        </a>.
    </div>

    <p name="txtSec8" contenteditable="true"><?php echo $lang['terminos de servicio']['txtSec8']?></p>
</div>

<input type="hidden" value="<?php echo $lang['terminos de servicio']['title']?>" id="apN" >
<input type="hidden" value="<?php echo $_GET['la']?>" id="language" >
<input type="hidden" value="<?php echo $lang['errors']['alertPage']?>" id="alertMsg" >
<input type="submit" placeholder="<?php echo $lang['input']['submit1']?>" class="form-control" onclick="submitForm('termsContTxt');">
<?php if(!$user || !$user['esMod']){ ?>
    <div class="text-start fs-3" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;">

        <h1 class="text-white"><?php echo $lang['aviso de privacidad']['txtSec1t']?></h1>

        <p>
            <?php echo $lang['aviso de privacidad']['txtSec1b']?>
        </p>

        <h2 class="text-white"><?php echo $lang['aviso de privacidad']['txtSec2t']?></h2>
        <p><?php echo $lang['aviso de privacidad']['txtSec2bp']?></p>
        <ul>
            <li><?php echo $lang['aviso de privacidad']['txtSec2bn']?></li>
            <li><?php echo $lang['aviso de privacidad']['txtSec2bd']?></li>
            <li><?php echo $lang['aviso de privacidad']['txtSec2bi']?></li>
        </ul>

        <h2 class="text-white"><?php echo $lang['aviso de privacidad']['txtSec3t']?></h2>
        <p><?php echo $lang['aviso de privacidad']['txtSec3bl']?></p>
        <ul>
            <li><?php echo $lang['aviso de privacidad']['txtSec3bc']?></li>
            <li><?php echo $lang['aviso de privacidad']['txtSec3bp']?></li>
            <li><?php echo $lang['aviso de privacidad']['txtSec3bpro']?></li>
            <li><?php echo $lang['aviso de privacidad']['txtSec3bm']?></li>
            <li><?php echo $lang['aviso de privacidad']['txtSec3be']?></li>
        </ul>

        <h2 class="text-white"><?php echo $lang['aviso de privacidad']['txtSec4t']?></h2>
        <p><?php echo $lang['aviso de privacidad']['txtSec4bn']?></p>
        <ul>
            <li><?php echo $lang['aviso de privacidad']['txtSec4bpc']?></li>
            <li><?php echo $lang['aviso de privacidad']['txtSec4bpp']?></li>
            <li><?php echo $lang['aviso de privacidad']['txtSec4bc']?></li>
        </ul>

        <h2 class="text-white"><?php echo $lang['aviso de privacidad']['txtSec5t']?></h2>
        <p><?php echo $lang['aviso de privacidad']['txtSec5b']?></p>

        <h2 class="text-white"><?php echo $lang['aviso de privacidad']['txtSec6t']?></h2>
        <p><?php echo $lang['aviso de privacidad']['txtSec6b']?></p>

        <h2 class="text-white"><?php echo $lang['aviso de privacidad']['txtSec7t']?></h2>
        <p><?php echo $lang['aviso de privacidad']['txtSec7bn']?></p>

        <p><?php echo $lang['aviso de privacidad']['txtSec7bs']?>
        <a href="?section=soporte&la=<?php echo $_GET['la'];?>" class="text-white"><?php echo $lang['aviso de privacidad']['txtSec7bso']?></a>.</p>
    </div>
<?php return; }?>

<div class="text-start fs-3" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;" id="avisoContTxt">

    <p name="txtSec1t" contenteditable="true" class="text-white display-6"><?php echo $lang['aviso de privacidad']['txtSec1t']?></p>

    <p name="txtSec1b" contenteditable="true"><?php echo $lang['aviso de privacidad']['txtSec1b']?></p>

    <p name="txtSec2t" contenteditable="true" class="text-white fs-2"><?php echo $lang['aviso de privacidad']['txtSec2t']?></p>
    <p name="txtSec2bp" contenteditable="true"><?php echo $lang['aviso de privacidad']['txtSec2bp']?></p>
    <ul>
        <li><p name="txtSec2bn" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec2bn']?></p></li>
        <li><p name="txtSec2bd" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec2bd']?></p></li>
        <li><p name="txtSec2bi" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec2bi']?></p></li>
    </ul>

    <p name="txtSec3t" contenteditable="true" class="text-white fs-2"><?php echo $lang['aviso de privacidad']['txtSec3t']?></p>
    <p name="txtSec3bl" contenteditable="true"><?php echo $lang['aviso de privacidad']['txtSec3bl']?></p>
    <ul>
        <li><p name="txtSec3bc" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec3bc']?></p></li>
        <li><p name="txtSec3bp" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec3bp']?></p></li>
        <li><p name="txtSec3bpro" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec3bpro']?></p></li>
        <li><p name="txtSec3bm" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec3bm']?></p></li>
        <li><p name="txtSec3be" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec3be']?></p></li>
    </ul>

    <p name="txtSec4t" contenteditable="true" class="text-white fs-2"><?php echo $lang['aviso de privacidad']['txtSec4t']?></p>
    <p name="txtSec4bn" contenteditable="true"><?php echo $lang['aviso de privacidad']['txtSec4bn']?></p>
    <ul>
        <li><p name="txtSec4bpc" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec4bpc']?></p></li>
        <li><p name="txtSec4bpp" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec4bpp']?></p></li>
        <li><p name="txtSec4bc" contenteditable="true" class="m-0"><?php echo $lang['aviso de privacidad']['txtSec4bc']?></p></li>
    </ul>

    <p name="txtSec5t" contenteditable="true" class="text-white fs-2"><?php echo $lang['aviso de privacidad']['txtSec5t']?></p>
    <p name="txtSec5b" contenteditable="true"><?php echo $lang['aviso de privacidad']['txtSec5b']?></p>

    <p name="txtSec6t" contenteditable="true" class="text-white fs-2"><?php echo $lang['aviso de privacidad']['txtSec6t']?></p>
    <p name="txtSec6b" contenteditable="true"><?php echo $lang['aviso de privacidad']['txtSec6b']?></p>

    <p name="txtSec7t" contenteditable="true" class="text-white fs-2"><?php echo $lang['aviso de privacidad']['txtSec7t']?></p>
    <p name="txtSec7bn" contenteditable="true"><?php echo $lang['aviso de privacidad']['txtSec7bn']?></p>

    <div class="d-flex">
        <p name="txtSec7bs" contenteditable="true"><?php echo $lang['aviso de privacidad']['txtSec7bs']?></p>&nbsp;
        <a href="?section=soporte&la=<?php echo $_GET['la']?>" class="text-white">
            <p name="txtSec7bso"><?php echo $lang['aviso de privacidad']['txtSec7bso']?></p>
        </a>.
    </div>
</div>

<input type="hidden" value="<?php echo $lang['aviso de privacidad']['title']?>" id="apN" >
<input type="hidden" value="<?php echo $_GET['la']?>" id="language" >
<input type="hidden" value="<?php echo $lang['errors']['alertPage']?>" id="alertMsg" >
<input type="submit" placeholder="<?php echo $lang['input']['submit1']?>" class="form-control" onclick="submitForm('avisoContTxt');">
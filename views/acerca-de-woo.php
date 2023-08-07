<!--    USUARIOS     -->

<?php if(!$user || !$user['esMod']){ ?>
    <div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;">
        <h2 class="text-white display-6"><?php echo $lang['acerca de woo']['txtSec1t']?></h2>
        <p class="paragraph">
            <?php echo $lang['acerca de woo']['txtSec1b']?>
        </p>
        <h2 class="text-white display-6"><?php echo $lang['acerca de woo']['txtSec2t']?></h2>
        <p class="paragraph">
            <?php echo $lang['acerca de woo']['txtSec2b']?>
        </p>
        <h2 class="text-white display-6"><?php echo $lang['acerca de woo']['txtSec3t']?></h2>
        <p class="paragraph">
            <?php echo $lang['acerca de woo']['txtSec3b']?>
        </p>
        <h2 class="text-white display-6"><?php echo $lang['acerca de woo']['txtSec4t']?></h2>
        <p class="paragraph">
            <?php echo $lang['acerca de woo']['txtSec4e']?>
        </p>
    
        <img src="<?php echo $lang['acerca de woo']['src0']?>" class="w-100" style="height: 350px;">
    
        <p class="paragraph">
            <br>
            <?php echo $lang['acerca de woo']['txtSec4f']?>
        </p>
    </div>
<?php return; }?>

<!--    MODERADORES     -->

<div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;" id="wikiContTxt">
    <p class="text-white display-6" name="txtSec1t" contenteditable="true"><?php echo $lang['acerca de woo']['txtSec1t']?></p>
    <p class="paragraph text-muted" name="txtSec1b" contenteditable="true"><?php echo $lang['acerca de woo']['txtSec1b']?></p>

    <p class="text-white display-6" name="txtSec2t" contenteditable="true"><?php echo $lang['acerca de woo']['txtSec2t']?></p>
    <p class="paragraph text-muted" name="txtSec2b" contenteditable="true"><?php echo $lang['acerca de woo']['txtSec2b']?></p>

    <p class="text-white display-6" name="txtSec3t" contenteditable="true"><?php echo $lang['acerca de woo']['txtSec3t']?></p>
    <p class="paragraph text-muted" name="txtSec3b" contenteditable="true"><?php echo $lang['acerca de woo']['txtSec3b']?></p>

    <p class="text-white display-6" name="txtSec4t" contenteditable="true"><?php echo $lang['acerca de woo']['txtSec4t']?></p>
    <p class="paragraph text-muted" name="txtSec4e" contenteditable="true"><?php echo $lang['acerca de woo']['txtSec4e']?></p>

    <div class="position-relative w-100">
        <input type="file" id="inputFile" class="position-absolute w-100 h-100 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
        <img src="<?php echo $lang['acerca de woo']['src0']?>" class="w-100">
    </div>

    <p class="paragraph text-muted mt-4" name="txtSec4f" contenteditable="true"><?php echo $lang['acerca de woo']['txtSec4f']?></p>
</div>

<input type="hidden" value="<?php echo $lang['acerca de woo']['title']?>" id="apN" >
<input type="hidden" value="<?php echo $_GET['la']?>" id="language" >
<input type="hidden" value="<?php echo $lang['errors']['alertPage']?>" id="alertMsg" >
<input type="submit" placeholder="<?php echo $lang['input']['submit1']?>" class="form-control" onclick="submitForm('wikiContTxt');">
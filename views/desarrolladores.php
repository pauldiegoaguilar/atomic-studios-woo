<?php if(!$user || !$user['esMod']){ ?>
    <div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;">
        <h2 class="text-white display-6"><?php echo $lang['desarrolladores']['txtSec1t']?></h2>
        <p class="paragraph text-muted"><?php echo $lang['desarrolladores']['txtSec1b']?></p>

        <h2 class="text-white display-6"><?php echo $lang['desarrolladores']['txtSec2t']?></h2>
            <div id="tupadre" class="fs-3">
                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src0']?>" class="col-2 rounded-circle h-75" alt="paul">
                    <p class="col-10 paragraph text-muted"><?php echo $lang['desarrolladores']['txtSec2b1']?></p>
                </div>

                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src1']?>" class="col-2 rounded-circle h-75" alt="torres">
                    <p class="col-10 paragraph text-muted"><?php echo $lang['desarrolladores']['txtSec2b2']?></p>
                </div>

                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src2']?>" class="col-2 rounded-circle h-75" alt="matias">
                    <p class="col-10 paragraph text-muted"><?php echo $lang['desarrolladores']['txtSec2b3']?></p>
                </div>

                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src3']?>" class="col-2 rounded-circle h-75" alt="sebastian">
                    <p class="col-10 paragraph text-muted"><?php echo $lang['desarrolladores']['txtSec2b4']?></p>
                </div>

                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src4']?>" class="col-2 rounded-circle h-75" alt="rordrigou">
                    <p class="col-10 paragraph text-muted"><?php echo $lang['desarrolladores']['txtSec2b5']?></p>
                </div>
            </div>
    </div>
<?php return; }?>

<div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;" id="devsContentTxt">
    <p class="text-white display-6" name="txtSec1t" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec1t']?></p>
    <p class="paragraph text-muted" name="txtSec1b" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec1b']?></p>
        
    <p class="text-white display-6" name="txtSec2t" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2t']?></p>
        <div id="tupadre" class="fs-3">
            <div class="row position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src0']?>" class="col-2 rounded-circle h-75" alt="paul">
                <p class="col-10 paragraph text-muted" name="txtSec2b1" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b1']?></p>
            </div>
            
            <div class="row mt-3 position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src1']?>" class="col-2 rounded-circle h-75" alt="torres">
                <p class="col-10 paragraph text-muted" name="txtSec2b2" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b2']?></p>
            </div>
            
            <div class="row mt-3 position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src2']?>" class="col-2 rounded-circle h-75" alt="matias">
                <p class="col-10 paragraph text-muted" name="txtSec2b3" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b3']?></p>
            </div>
            
            <div class="row mt-3 position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src3']?>" class="col-2 rounded-circle h-75" alt="sebastian">
                <p class="col-10 paragraph text-muted" name="txtSec2b4" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b4']?></p>
            </div>
            
            <div class="row mt-3 position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src4']?>" class="col-2 rounded-circle h-75" alt="rordrigou">
                <p class="col-10 paragraph text-muted" name="txtSec2b5" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b5']?></p>
            </div>
        </div>
</div>
<input type="hidden" value="<?php echo $lang['desarrolladores']['title']?>" id="apN" >
<input type="hidden" value="<?php echo $_GET['la']?>" id="language" >
<input type="hidden" value="<?php echo $lang['errors']['alertPage']?>" id="alertMsg" >
<input type="submit" placeholder="<?php echo $lang['input']['submit1']?>" class="form-control" onclick="submitForm('devsContentTxt');">
<?php 
    if(empty($user) || !$user['esMod']){
        echo 'Error 404: Not found';
        exit();
    } 
?>

<script>
    let filesAmount;
    let currentS = 0;

    function formatString(){
        let textareas = $('[id="lTxt"]');
        let format = $('#postFormat');
        let arr = [];
        textareas.map
            (function(){
                return arr.push($(this).val());
            });

        format.val(arr.join('|'));
        $('form').submit();
    }

    function addText(){
        if($('[id="lTxt"]').length < 8){
            let nuevoCampo = $('#listText').clone().append('<span title=\'delete\' style=\'cursor: pointer;\' onclick=\'$(this).parent().remove();\'>-</span>');
                        
            $('#newList').append(nuevoCampo);            
        }
    }

    function showImgs(input){
        filesAmount = input.files.length;
        console.log(input.files);
        if(filesAmount < 6 && filesAmount != 0){
            $('#fileLabel, #carrusel').toggleClass('d-none');
            for(let i=0; i<filesAmount; i++){
                $('#carrusel').append('<img id="slide'+i+'" style="opacity: 0; width: 0%; object-fit: contain;" class="h-100" src='+URL.createObjectURL(input.files[i])+'>');
            }
            $('#carrusel img').first().attr('style', 'opacity: 1; width: 100%; object-fit: contain;');
        }
        else{
            input.value = '';
        }
    }

    function previousImg(){
        if(currentS != 0){
            $('#slide'+currentS).animate({opacity: 0, width: '0%'}, 800);
            currentS = currentS - 1;
            $('#slide'+currentS).animate({opacity: 1, width: '100%'}, 800);
        }
    }

    function nextImg(){
        if(currentS < filesAmount-1){
            $('#slide'+currentS).animate({opacity: 0, width: '0%'}, 800);
            currentS = currentS + 1;
            $('#slide'+currentS).animate({opacity: 1, width: '100%'}, 800);
        }
    }
</script>

<style>
    input{
        border: none;
        background-color: inherit;
        resize: none;
        outline: none;
    }

    textarea{
        background-color: inherit;
        resize: none;
        outline: none;
    }

    .newBody::placeholder{
        font-size: calc(1.1rem + 0.6vw);
        text-transform: uppercase;
        text-align: center;
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
    }
</style>
    <form action="modelos/subirNoticia.php" onsubmit="formatString();" enctype="multipart/form-data" method="POST" class="mx-auto" style="width: 90%;">
        <div id="newsCarrusel" class="d-flex align-items-center position-relative m-auto bg-dark w-100" style="top: -70px; height: 380px;">
            <label for="fileSelector" class="position-relative text-center rounded border border-light w-75 h-50 mx-auto" id="fileLabel">
                <input id="fileSelector" name="fileSelector[]" type="file" accept="image/*" style="cursor: pointer;" class="position-absolute opacity-0 w-100 h-100 start-0" onchange="showImgs(this);" multiple required>
                <p class="display-2 text-white">+</p>
                <p class="text-white"><?php echo $lang['crear noticia']['s']?></p>
            </label>
            <div id="carrusel" class="d-none d-flex align-items-center overflow-x-hidden w-100 h-100">
                <button id="cBack" type="button" onclick="previousImg();" class="position-absolute start-0 border-0 btn btn-outline-light py-1 px-3 ms-1 fs-3 rounded-circle"><</button>
                <button id="cNext" type="button"  onclick="nextImg();" class="position-absolute end-0 border-0 btn btn-outline-light py-1 px-3 fs-3 me-1 rounded-circle">></button>
            </div>
        </div>
        <div>
            <input name="newTitle" type="text" class="w-100 text-start text-uppercase h2" style="color: #7BB0FF;" placeholder="<?php echo $lang['crear noticia']['t']?>" maxlength="100" autocomplete="off" required>
            <hr>
            <textarea name="newBody" id="newBody" rows="8" class="newBody w-100 fs-5" placeholder="<?php echo $lang['crear noticia']['ac']?>" maxlength="2000" required></textarea>
            <div class="w-100 text-center">
                <button onclick="$('#novedades, #aList, #rList').toggleClass('d-none'); document.querySelector('#lTxt').toggleAttribute('required');" class="btn form-control rounded-5 border-0 btn-success w-50 mt-4 mb-3" type="button" id="aList"><?php echo $lang['crear noticia']['a']?></button>
                <button onclick="$('#novedades, #rList, #aList').toggleClass('d-none'); document.querySelector('#lTxt').toggleAttribute('required'); $('#lTxt').val('');" class="d-none btn form-control rounded-5 border-0 btn-danger w-50 mt-4 mb-3" type="button" id="rList"><?php echo $lang['crear noticia']['r']?></button>
            </div>
            <div id="novedades" class="d-none d-flex flex-column align-items-center">
                <div class="w-75 text-center">
                    <h2 class="mt-5 text-warning text-uppercase"><?php echo $lang['crear noticia']['q']?></h2>
                    <hr>
                </div>
                <div id="newList" class="text-light lead w-75 my-4">
                    <p id="listText" class="d-flex">&diams;&nbsp;&nbsp;
                        <textarea oninput="$(this).css('height', this.scrollHeight);" id="lTxt"
                            class="overflow-hidden border-0 position-relative w-100 text-start"
                                placeholder="<?php echo $lang['crear noticia']['l']?>" maxlength="500"></textarea>
                    </p>
                </div>
                <button onclick="addText();" type="button" class="btn form-control w-25 p-0 my-5 fs-3 text-light">+</button>
            </div>
        </div>
        <input type="hidden" name="listText" id="postFormat">
        <input type="hidden" name="la" value="<?php echo $_GET['la']?>">
        <input type="submit" class="form-control mt-4" value="<?php echo $lang['crear noticia']['p']?>">
        <p id="alertMsg"><?php echo $lang['errors']['alertNews']?><p>
    </form>
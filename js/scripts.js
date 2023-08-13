function MostrarCard(tagId) {
    let img = $('#t-img-' + tagId).attr('src');
    let titulo = $('#t-title-' + tagId).text();
    let descripcion = $('#t-desc-' + tagId).text();
    let alta = $('#t-alta-' + tagId).text();
    let baja = $('#t-baja-' + tagId).text();
    let coins = $('#t-coins-' + tagId).text();
    let campeon = $('#t-champ-' + tagId).text() == '' ? '"..."' : $('#t-champ-' + tagId).text();
    let imgPerfil = $('#t-prolife-' + tagId).text();
    let cofreCant = $('#t-cofreCant-' + tagId).text();
    let cofre = $('#t-cofre-' + tagId).text();

    $('#fk-screen').css({
        'display': 'flex',
        'backdrop-filter': 'blur(5px)'
    });

    $('#fk-screen, #ts-card').show('slow');
    $('#ts-img').attr('src', img);
    $('#ts-title').text(titulo);
    $('#ts-desc').text(descripcion);
    $('#ts-alta').text(alta);
    $('#ts-baja').text(baja);
    $('#ts-coins').text('$' + coins);
    $('#ts-champ').text(campeon);
    $('#ts-cofreCant').text(cofreCant);
    $('#ts-cofre').text(cofre);
}

function switchLan(lan){
    lan = lan === 'esp' ? 'eng' : 'esp';
  
    let url = window.location.href.replace(/(la=)(\w+)/, '$1'+lan);
    location.assign(url);
}

//  NOTICIAS

let intervaloCarrusel;
let slideIndex = 0;

function showPost(index){
    console.log(noticias[index]);
    
    removeCarrusel();

    $('#ndTitle').html(noticias[index].titulo);
    $('#ndBody').html(noticias[index].cuerpo);

    if(noticias[index].lista){
        let listas = noticias[index].lista.split('|');

        $('#ndList').toggleClass('d-none');
        listas.forEach(function(e, k){
            $('#ndList').append('<p class="ms-2 text-light fs-5 font-italic">&diams;&nbsp;&nbsp;' + listas[k]);
        });
    }

    let imgs = noticias[index].rutas.split(',');
    imgs.forEach(function(e, k){
        $('#ndCarrusel').append('<img src="'+imgs[k]+'" alt="new Image" class="h-100" style="opacity: 0; width: 0%; object-fit: contain;" id="slide'+(k)+'">');
    });

    if(imgs.length == 1){
        $('#ndCarrusel button').toggleClass('d-none');
    }
    
    $('#ndCarrusel img').first().attr('style', 'opacity: 1; width: 100%; object-fit: contain;');
    $('#newsPageHeader, #newsFather, #newDetails').toggleClass('d-none');
    
    if($('#ndCarrusel img').length > 1){
        newsCarrusel();
    }
}

function newsCarrusel(){

    intervaloCarrusel = setInterval(function(){
        $('#slide' + slideIndex).animate({opacity: 0, width: '0%'});
        slideIndex = (slideIndex + 1) % $('#ndCarrusel img').length;
        $('#slide' + slideIndex).animate({ opacity: 1, width: '100%'});
    }, 5000);
}

function removeCarrusel() {
    if (intervaloCarrusel) {
        clearInterval(intervaloCarrusel);
        intervaloCarrusel = null;
    }

    $('#ndCarrusel img').remove();
    $('#ndCarrusel img').removeAttr('style');
}

function nextSlide(){
    $('#slide' + slideIndex).animate({opacity: 0, width: '0%'});
    slideIndex = (slideIndex + 1) % $('#ndCarrusel img').length;
    $('#slide' + slideIndex).animate({ opacity: 1, width: '100%'});
}

function lastSlide(){
    $('#slide' + slideIndex).animate({opacity: 0, width: '0%'});
    slideIndex = (slideIndex - 1 + $('#ndCarrusel img').length) % $('#ndCarrusel img').length;
    $('#slide' + slideIndex).animate({ opacity: 1, width: '100%'});
}
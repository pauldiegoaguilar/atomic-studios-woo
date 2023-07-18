function MostrarCard(tagId) {
    var img = $('#t-img-' + tagId).attr('src');
    var titulo = $('#t-title-' + tagId).text();
    var descripcion = $('#t-desc-' + tagId).text();
    var alta = $('#t-alta-' + tagId).text();
    var baja = $('#t-baja-' + tagId).text();
    var coins = $('#t-coins-' + tagId).text();
    var campeon = $('#t-champ-' + tagId).text() == '' ? '"..."' : $('#t-champ-' + tagId).text();
    var imgPerfil = $('#t-prolife-' + tagId).text();
    var rareza = $('#t-rareza-' + tagId).text();

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
    $('#ts-rareza').addClass(rareza).text(rareza);
}

function switchLan(lan){
    lan = lan === 'esp' ? 'eng' : 'esp';
  
    let url = window.location.href.replace(/(la=)(\w+)/, '$1'+lan);
    location.assign(url);
}
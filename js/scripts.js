
function MostrarCard(tagId)
{
    var img = $('#t-img-'+tagId).attr('src');
    var titulo = $('#t-title-'+tagId).text();
    var descripcion = $('#t-desc-'+tagId).text();
    var alta = $('#t-alta-'+tagId).text();
    var baja = $('#t-baja-'+tagId).text();
    
    $('#fake-screen').attr('class', 'd-flex w-100 h-100 fixed-top justify-content-center align-items-center');
    $('#ts-card').show('slow');
    $('#ts-img').attr('src', img);
    $('#ts-title').text(titulo);
    $('#ts-desc').text(descripcion);
    $('#ts-alta').text(alta);
    $('#ts-baja').text(baja);
}

function close(){
    $('#ts-card').hide('slow');
    $('#fake-screen').attr('class', 'd-none w-100 h-100 fixed-top justify-content-center align-items-center');
}
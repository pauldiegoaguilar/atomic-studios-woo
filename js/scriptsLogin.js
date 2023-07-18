function emailText(text){
  let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  let isValid = regex.test(text);
  return isValid;
}

function switchLan(lan){
  lan = lan === 'esp' ? 'eng' : 'esp';

  let url = window.location.href.replace(/(la=)(\w+)/, '$1'+lan);
  location.assign(url);
}

function getLan(){
  let url = window.location.href;
  let lan = url.split('&').pop();
  return lan;
}

/* Evaluador de password (menor de 20 caracteres, al menos 3 especiales y alfanumerico)*/
function getChar(tag) {
  var constructor = tag;
  
  $('#error-char, #error-num, #error-alpha, #error-len, #error-conn, #error-eq, #error-fields').addClass("d-none");


  specChar = constructor.match(/[!@#$%^&*(),.?":{}|<>]/g);

  if (specChar == null || specChar.length < 3) {
    $('#error-char').removeClass('d-none');
    return;
  }

  NumChar = constructor.match(/[0-9]/g);

  if (NumChar == null || NumChar.length < 3) {
    $('#error-num').removeClass('d-none');
    return;
  }

  abcChar = constructor.match(/[a-zA-Z]/g);

  if (abcChar == null || abcChar.length < 3) {
    $('#error-alpha').removeClass('d-none');
    return;
  }

  if (constructor.length > 20) {
    $('#error-len').removeClass('d-none')
    return;
  }

  return;
}

function verifRegis(form) {
  let name = form.nomR.value;
  let mail = form.emailR.value;
  let pass = form.passR.value;

  $('#dataVerif').removeClass('d-none');
  $('#error-nomR, #error-nomRe, #error-emailR, #error-emailRe, #error-passR, #successReg').addClass('d-none');

  setTimeout(function(){
    $('#dataVerif').addClass('d-none');
    $.ajax({
      type: "POST",
      url: "modelos/funcion-reg.php",
      data: { nomR: name, emailR: mail, passR: pass },

      success: function(res) {
        if(res){
          let selArr = res.split('&');
          selArr.shift();
          let selector = selArr.toString();

          $(selector).removeClass('d-none');
        }
        else{
          $('#successReg').removeClass('d-none');
          setTimeout(function(){location.assign('?section=login&'+getLan())}, 3000);
        }
      },

      error: function(res, errType){
        alert(
          'Error: Verifica tu conexión a internet o contactate con soporte. \n'+ 
          'Tipo de error: ' + errType + '\n'+
          'Respuesta del servidor: '+ res);
        location.assign('index.php');
      }
    });
  }, 1500);
}



function verifEmail(){
    let email_recup = $('#typeEmailX').val();

    $("#email-error-format, #email-error-reg, #email-error-qry, #email-success-recup, #email-gen-recup").addClass('d-none');
    
    if(emailText(email_recup)){
      $.ajax({
        type: "POST",
        url: "modelos/recuperacion.php",
        data: { email: email_recup },

        success: function (result) {
          console.log(result);
          if (result * 1) {
            $("#email-gen-recup").removeClass('d-none');
            genCode();
          } 
          else {
            $("#email-error-reg").removeClass('d-none');
          }
        },
        error: function () {
          alert("Error de conexion, compruebe su conexión a internet");
          location.reload();
        },
      });
    }else{
      $("#email-error-format").removeClass('d-none');
    }
}

function genCode(){
  $.ajax({
    url: "modelos/generarCode.php",
    dataType: "text",

    success: function(res){ 
      $("#email-gen-recup").addClass('d-none');

      if(!res * 1){
        $("#email-error-qry").removeClass('d-none');
        return;
      }

      $("#email-success-recup").removeClass('d-none');
      setTimeout(function(){location.reload()}, 1500);
    }
  });
}

function verifCode(){

  $('#verificador-iden, #verificador-format, #verificador-incorrect, #verificador-deprecated, #verificador-success').addClass('d-none')

  var code = $('#selector-identif').children().map(function(){return $(this).val();}).toArray().join(""); //Con toArray, pasa de ser objJQUERY a un arreglo
  
  if(!/^\d+$/.test(code)){ // expresion js
    $('#selector-identif').children().val("");
    $('#verificador-format').removeClass('d-none')
    return;
  }

  $.ajax({
    type: "POST",
    url: "modelos/verifCode.php",
    data: {codigo: code},
    dataType: 'JSON',

    success: function(res){

      $('#verificador-iden').addClass('d-none');

      if(!res.access*1){
        $('#'+res.msg).removeClass('d-none');
        return;
      }

      $('#verificador-success').removeClass('d-none');
      setTimeout(location.assign('?section=cambiarContra&v=' + res.msg + '&' + getLan()), 2000);
    },

    error: function(res, errType){
      alert(
        'Error: Verifica tu conexión a internet o contactate con soporte. \n'+ 
        'Tipo de error: ' + errType + '\n'+
        'Respuesta del servidor: '+ res);
      location.assign('index.php');
    },

  });
}

function confirmPassword(){

  let pass1 = $('#typePasswordX').val();
  let pass2 = $('#typePasswordConfirmX').val();

  if(!pass1){
    $('#error-fields').removeClass('d-none');
    return;
  } 

  if(pass1 == pass2){
    $.ajax({
      type: "POST",
      url: "modelos/changePassword.php",
      data: {pass: pass1},
      
      success: function(){
        $('#verifiedPass').show('fast');
        setTimeout(function(){location.assign('main.php?section=war-over-ocean&'+ getLan())}, 1500);
      },

      error: function(){
        $('#error-conn').removeClass('d-none')
      }
    });
  }
  else{
    $('#error-eq').removeClass('d-none');
  }
}

$(document).ready(function(){
  $('[id="typeCodeX"]').keyup(function(e){
    if(e.keyCode == 13){
      $(this).nextAll().first().focus();
    }
    else if(e.keyCode == 8){
      $(this).prevAll().first().focus();
    }
  });
});

/* -- Login -- */

function verifLogin(form) {
  let mail = form.emailL.value;
  let pass = form.passL.value;
  let remind;

  if(document.getElementById('form1Example3').checked){
    remind = form.remind.value;
  }else{
    remind = '';
  }

  let valid = true;

  $('#errorLog').css('display', 'none');

  if(valid) {
    $.ajax({
      type: "POST",
      url: "modelos/funcion-log.php",
      data: { emailL: mail, passL: pass, remindL: remind },

      success: function(res) {
        if(res){
          $('#successLog').html('Bienvenido, ' + res);

          $('#successLog').css('display', 'block');
          setTimeout(function(){location.assign('main.php?section=war-over-ocean')}, 1500);

        }
        else{
          $('#errorLog').css('display', 'block');
        }
      },

      error: function(res){
        console.log(res);
        alert('Error: Compruebe su conexión a internet, intente más tarde');
        location.assign('index.php');
      }
    });
  }


}
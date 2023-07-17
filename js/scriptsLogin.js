function emailText(text){
  let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  let isValid = regex.test(text);
  return isValid;
}

/* Evaluador de password (menor de 20 caracteres, al menos 3 especiales y alfanumerico)*/
function getChar(tag) {
  var constructor = tag;

  specChar = constructor.match(/[!@#$%^&*(),.?":{}|<>]/g);

  if (specChar == null || specChar.length < 3) {
    $('#error-password').text("Debe contener al menos 3 caracteres especiales");
    return;
  }

  $('#error-password').text("");

  NumChar = constructor.match(/[0-9]/g);

  if (NumChar == null || NumChar.length < 3) {
    $('#error-password').text("Debe contener al menos 3 numeros enteros");
    return;
  }

  abcChar = constructor.match(/[a-zA-Z]/g);

  if (abcChar == null || abcChar.length < 3) {
    $('#error-password').text("Debe contener al menos 3 letras");
    return;
  }

  $('#error-password').text("");

  if (constructor.length > 20) {
    $('#error-password').text("Debe ser menor de 10 caracteres");
    return;
  }

  $('#error-password').text("");
  return 
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
          setTimeout(function(){location.assign('?section=login')}, 3000);
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
    
    if(emailText(email_recup)){
      $.ajax({
        type: "POST",
        url: "modelos/recuperacion.php",
        data: { email: email_recup },

        success: function (result) {
          console.log(result);
          if (result * 1) {
            $("#email-error-recup").removeClass("text-danger").addClass("text-success").html("Generando codigo...");
            genCode();
          } 
          else {
            $("#email-error-recup").html("Error: Correo no registrado.");
          }
        },
        error: function () {
          alert("Error de conexion, compruebe su conexión a internet");
          location.reload();
        },
      });
    }else{
      $("#email-error-recup").html("Error: La direccion no cumple con formato");
    }
}

function genCode(){
  $.ajax({
    url: "modelos/generarCode.php",
    dataType: "text",

    success: function(res){ 
      if(!res * 1){
        $("#email-error-recup").removeClass("text-success").addClass("text-danger").html("Error: No se pudo enviar el correo, verifique la direccion de correo");
        return;
      }

      $("#email-error-recup").html("El código se ha generado con éxito");
      setTimeout(function(){location.reload()}, 3000);
    }
  });
}

function verifCode(){

  $('#verificador-iden').removeClass('text-danger').addClass('text-success').html("Verificando...");

  var code = $('#selector-identif').children().map(function(){return $(this).val();}).toArray().join(""); //Con toArray, pasa de ser objJQUERY a un arreglo
  
  if(!/^\d+$/.test(code)){ // expresion js
    $('#selector-identif').children().val("");
    $('#verificador-iden').removeClass('text-success').addClass('text-danger').html("Error: Entrada invalida");
    return;
  }

  $.ajax({
    type: "POST",
    url: "modelos/verifCode.php",
    data: {codigo: code},
    dataType: 'JSON',

    success: function(res){

      if(!res.access*1){
        $('#verificador-iden').removeClass('text-success').addClass('text-danger').html(res.msg);
        return;
      }
      
      $('#verificador-iden').html("Success: Codigo ingresado con exito");
      setTimeout(location.assign('?section=cambiarContra&v=' + res.msg), 2000);
    },
    error: function(r){
      console.log(r);
    }
  })
}

function confirmPassword(){
  let pass1 = $('#typePasswordX').val();
  let pass2 = $('#typePasswordConfirmX').val();
  
  if(!pass1){
    $('#error-password').html('Complete campos');
    return;
  } 

  if(pass1 == pass2){
    $.ajax({
      type: "POST",
      url: "modelos/changePassword.php",
      data: {pass: pass1},
      
      success: function(){
        $('#verifiedPass').show('fast');
        setTimeout(location.assign('main.php?section=war-over-ocean'), 5000);
      },

      error: function(){
        $('#error-password').html('Error: Compruebe su conexion a internet');
      }
    });
  }
  else{
    $('#error-password').html('Las contraseñas deben ser iguales');
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
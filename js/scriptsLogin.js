

function verifEmail(){
    var email_recup = $('#typeEmailX').val();

    console.log(email_recup); // ^[^\s@]+@[^\s@]+\.[^\s@]+$ ver en un futuro xd
    
    if(email_recup.length !== 0){
      var emailVefif = email_recup.split("@");
      if(emailVefif[1] == "gmail.com" && emailVefif.length == 2){
        $.ajax({
          type: "POST",
          url: "modelos/recuperacion.php",
          data: { email: email_recup },
          
          success: function (result) {
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
      }else if(emailVefif[1] !== "gmail.com" || emailVefif.length > 2){
        $("#email-error-recup").html("Error: El correo debe ser de tipo Gmail.");
      }
    }else{
      $("#email-error-recup").html("Error: No se ha ingresado una dirección de correo.");
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
      setTimeout(location.reload(), 3000);
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
    dataType: 'text',

    success: function(res){
      if(!res * 1){
        $('#verificador-iden').removeClass('text-success').addClass('text-danger').html('Error: Codigo incorrecto');
        return;
      }
      $('#verificador-iden').html("Success: Codigo ingresado con exito");
      setTimeout(location.assign('?section=cambiarContra'), 2000);
    }
  })
}

function confirmPassword(){
  let pass1 = $('#typePasswordX').val();
  let pass2 = $('#typePasswordConfirmX').val();
  
  if(pass1 == pass2){
    $.ajax({
      type: "POST",
      url: "modelos/changePassword.php",
      data: {pass: pass1},
      
      success: function(){
        $('#verifiedPass').show('fast');
        setTimeout(location.assign('main.php?section=war-over-ocean'), 5000);
      }
    });
  }
  else{
    $('#error-password').html('Las contraseñas deben ser iguales');
  }
}



/* Evaluador de password (menor de 10 caracteres, al menos 3 especiales y alfanumerico)*/
function GetChar(event) {
  var constructor = $("#typePasswordX").val();
  var key = event.key;

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

  if (constructor.length > 10) {
    $('#error-password').text("Debe ser menor de 10 caracteres");
    return;
  }

  $('#error-password').text("");
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

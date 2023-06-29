function verifEmail(){
    var email_recup = $('#typeEmailX').val();

    console.log(email_recup);
    
    if(email_recup.length !== 0){
      var emailVefif = email_recup.split("@");
      if(emailVefif[1] == "gmail.com" && emailVefif.length == 2){
        $.ajax({
          type: "POST",
          url: "modelos/recuperacion.php",
          data: { email: email_recup },
          
          success: function (result) {
            if (result) {
              $("#email-error-recup").removeClass("text-danger").addClass("text-success");
              $("#email-error-recup").html("Generando codigo...");
              location.assign('?section=identificador');
            } 
            else {
              $("#email-error-recup").html("Error: El correo no existe.");
            }
          },
          error: function (res) {
            alert("Error de conexion, compruebe su conexión a internet");
            location.reload();
          },
        });
      }else if(emailVefif[1] !== "gmail.com" || emailVefif.length > 2){
        $("#email-error-recup").html("Error: El debe ser de tipo Gmail.");
      }
    }else{
      $("#email-error-recup").html("Error: No se ha ingresado una dirección de correo.");
    }
  }
  
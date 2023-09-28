<?php
    if(!isset($_SESSION['user_id']) || !$_SESSION['esMod']){
        die("Error 404: Not found");
    }
?>
<div class="w-75 m-auto">
    <div class="display-5 text-white border-bottom mb-2">Lista de usuarios</div>

    <div class="d-flex flex-wrap align-items-center text-white" style="height: 50px;">
        <p class="fs-2 pe-2 m-0">Filtros:</p>
        <select id="filtList" class="text-center h-75">
            <option value="none" selected>Ninguno</option>
            <option value="banned">Usuarios baneados</option>
            <option value="userName">Nombre</option>
        </select>
        <div id="searchUser" class="ms-auto" style="display: none;">
            <input type="text" id="nick" placeholder="Nombre de usuario">
        </div>
    </div>

    <div class="d-flex flex-column justify-content-center w-100 my-2" style="height: 172px; overflow: hidden;">
        <div class="overflow-auto h-100"> <!-- Table Scroll Bar -->
            <table class="table table-sm table-bordered table-hover table-dark text-center my-2">
                <thead>
                    <tr>
                        <th scope='col'>Id</th>
                        <th scope='col'>Nombre</th>
                        <th scope='col'>Mail</th>
                        <th scope='col'>Clave</th>
                        <th scope='col'>Genero</th>
                        <th scope='col'>Monedas</th>
                        <th scope='col'>Descripcion</th>
                        <th scope='col'>Registro</th>
                        <th scope='col'>De baja</th>
                        <th scope='col'>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table table-light" id="usersBody"></tbody>
            </table>
        </div>
    </div>
    <button class="w-100 btn btn-light" onclick="traerFilas();">Traer filas</button>

    <div class="display-6 text-white border-bottom my-4">Información del usuario</div>
    
        <div class="border-bottom text-center text-light lead">Inventario</div>
        <table class="table table-sm table-bordered table-hover table-dark text-center my-2">
            <thead>
                <tr>
                    <th scope='col'>Flota</th>
                    <th scope='col'>Usuario</th>
                    <th scope='col'>Ultimo Propietario</th>
                </tr>
            </thead>
            <tbody class="table table-light" id="usersInventory"></tbody>
        </table>

        <div class="border-bottom text-center text-light lead">Registro de compras</div>
        <table class="table table-sm table-bordered table-hover table-dark text-center my-2">
            <thead>
                <tr>
                    <th scope='col'>id</th>
                    <th scope='col'>Usuario</th>
                    <th scope='col'>Producto</th>
                    <th scope='col'>Fecha de Compra</th>
                </tr>
            </thead>
            <tbody class="table table-light" id="usersBuys"></tbody>
        </table>
    </div>
<script>
    let registros = 2;
    let cantidadFilas = 2;
    let currentFilter = "none";
    let nick = "";

    traerFilas();

    $("#filtList").change(function() {
        currentFilter = $('#filtList').val();
        cantidadFilas=2;
        $('#searchUser').hide();

        if(currentFilter == "userName"){
            $('#searchUser').show();
        }
    });

    function traerFilas(){
        console.log(cantidadFilas);
        $.ajax({
                url: "modelos/modUsuarios.php?from=" + cantidadFilas + "&filter=" + currentFilter + "&user=" + $('#nick').val(),

                success: function(res){
                    $('#usersBody').html("");
                    $('#usersBody').append(res);
                    $('#nick').val("");
                    cantidadFilas = cantidadFilas + registros;
                },

                error: function(jqXHR, textStatus, errorThrown){
                    console.log(jqXHR, textStatus,errorThrown);
                    alert("Hubo un error, intentelo más tarde: " + errorThrown);
                }
        });
    }

    function selectRow(fila){
        idUser = fila.id.split("-")[1];
        console.log(idUser);
        $.ajax({
                url: "modelos/infoUsuario.php?user=" + idUser,
                dataType: "JSON",

                success: function(res){
                    console.log(res);
                    $('#usersInventory').html("");
                    $('#usersInventory').append(res[0]);usersBuys
                    $('#usersBuys').html("");
                    $('#usersBuys').append(res[1]);
                    cantidadFilas = cantidadFilas + registros;
                },

                error: function(jqXHR, textStatus, errorThrown){
                    console.log(jqXHR, textStatus,errorThrown);
                    alert("Hubo un error, intentelo más tarde: " + errorThrown);
                }
        });
    }

    function suspenderUsuario(usId){
        if(confirm("Se suspenderá la cuenta del usuario hasta nuevo aviso")){
            $.ajax({
                url: "modelos/modEliminar.php?id=" + usId + "&del=1",

                success: function(res){
                    alert('La cuenta ha sido suspendida');
                    location.reload();
                },

                error: function(jqXHR, textStatus, errorThrown){
                    console.log(jqXHR, textStatus,errorThrown);
                    alert("Hubo un error, intentelo más tarde: " + errorThrown);
                }
            })
        }
    }
    
    function desBanear(usId){
        if(confirm("Se quitará la suspensión del usuario")){
            $.ajax({
                url: "modelos/modEliminar.php?id=" + usId + "&del=0",

                success: function(res){
                    alert('Se ha quitado la suspensión');
                    location.reload();
                },

                error: function(jqXHR, textStatus, errorThrown){
                    console.log(jqXHR, textStatus,errorThrown);
                    alert("Hubo un error, intentelo más tarde: " + errorThrown);
                }
            })
        }
    }
</script>
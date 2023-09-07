<?php
    require_once "modelos/modUsuarios.php";
?>

<div class="d-flex justify-content-center w-100 h-100 p-4 overflow-auto">
    <table class="table table-sm table-bordered table-hover table-dark text-center ">
        <thead>
            <tr>
                <?php
                    $html = "";
                    foreach($headers as $r){
                        $html .= "<th scope='col'>" . ucfirst($r->name) . "</th>";
                    }
                    $html .= "<th scope='col'>Acciones</th>";
                    echo $html;
                ?>
            </tr>
        </thead>
        <tbody class="table table-light">
            <?php
                $html = "";
                foreach($rows as $row){
                    $html .= "<tr>";
                    foreach($row as $col){
                        $html .= "<td>" . $col . "</td>";
                    }
                    $html .= "<td>";

                    if($row['fecha_baja']){
                        $html .= "<button class='btn btn-dark' onclick='desBanear(" . $row['id'] . ");'>Desbanear</button>";
                    } else{
                        $html .= "<button class='btn btn-dark' onclick='suspenderUsuario(" . $row['id'] . ");'>Suspender</button>";
                    }
                    $html .= "</td>";
                    $html .= "</tr>";
                }
                echo $html;
            ?>
        </tbody>
    </table>
</div>

<script>
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
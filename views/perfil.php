<div style="width: 60%; margin: 0 auto;" class="card text-center">
    <div class="card-header h4">
        PERFIL
    </div>
    <div class="card-body">
        <h5 class="card-title h1">INFORMACION DEL USUARIO</h5>
        <ul class="w-50 m-auto list-group list-group-flush">
            <li class="list-group-item h4">Nombre de Usuario: <?php echo ($user["nombre"]); ?></li>
            <li class="list-group-item h4">Email: <?php echo ($user["email"]); ?></li>
            <li class="list-group-item h4">Descripcion: <?php echo ($user["descripcion"]); ?></li>
            <li class="list-group-item h4">Monedas: <?php echo ($user["monedas"]); ?> Atomic Coins </li>
        </ul>
    </div>
    <!-- <div class="card-footer text-muted">
        2 days ago
    </div> -->
</div>
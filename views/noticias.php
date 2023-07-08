<div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;">
    <?php for($i = 0; $i < 10; $i++){ ?>
        <a href="#" style="text-decoration: none;">
            <div class="row d-flex">
                <img class="col-lg-6" src="img/over_ocean.jpg" alt="img-noticia">
                <div class="col-lg-6 text-start d-flex flex-column justify-content-center mt-3">
                    <i class="text-grey">DD/MM/YYYY</i>
                    <h1 style="color: #7BB0FF;">NOTAS DE LA VERSIÓN 4.6.0</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipiscing elit, orcimalesuada dignissim libero tempus id ante, mauris vivamusturpis suspendisse massa arcu. Ultricies habitant netus eget inrhoncus maecenas porttitor ligula justo, dui eros nullam orcimorbi sodales sapien nunc, pulvinar natoque praesent plateaerat varius dis ut.
                    </p>
                </div>
            </div>
        </a>
        <?php
            if($i < 9){ ?>
                <br>
                <hr>
                <br>
        <?php } ?>
    <?php } ?>
</div>
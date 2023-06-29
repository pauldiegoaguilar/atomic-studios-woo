<div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;">
    <?php for($i = 0; $i < 10; $i++){ ?>
        <a href="#" style="text-decoration: none; color: inherit;">
            <div class="d-flex">
                <img style="width: 50%; margin-right: 50px;" src="img/over_ocean.jpg" alt="img-noticia">
                <div class="text-start d-flex flex-column justify-content-center">
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
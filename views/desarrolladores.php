<?php if(!$user || !$user['esMod']){ ?>
    <div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;">
        <h2 class="text-white display-6">Acerca de Atomic Studios</h2>
        <p class="paragraph text-muted">Atomic Studios es una reconocida empresa en la industria de los videojuegos, especializada en el desarrollo y la publicación de emocionantes juegos para diversas plataformas. Su juego estrella es "War Over OCEAN", un título que sumerge a los jugadores en la intensidad de las batallas navales.</p>

        <h2 class="text-white display-6">¿De que se trata el juego "War Over Ocean"?</h2>
            <p class="paragraph text-muted">En "War Over Ocean", los jugadores asumen el papel de comandantes de flotas y se enfrentan en una competencia estratégica y táctica en los océanos del mundo. El juego ofrece una experiencia realista de batalla naval, con gráficos impresionantes y detalles meticulosos de los barcos y el entorno marítimo. <br> Los jugadores pueden elegir entre una amplia variedad de buques de guerra históricos, desde acorazados y cruceros hasta submarinos y destructores. Cada barco tiene características únicas, como velocidad, armamento y resistencia, lo que permite a los jugadores planificar cuidadosamente sus estrategias y tácticas para derrotar a sus oponentes.</p>

        <h2 class="text-white display-6">¿Que tipos de modos hay?</h2>
            <p class="paragraph text-muted">"Naval Warfare: Battleships of Steel" ofrece múltiples modos de juego, incluyendo campañas en solitario, partidas multijugador en línea y desafíos cooperativos. Los jugadores pueden enfrentarse a la IA en batallas épicas o competir contra otros jugadores en intensos combates navales en línea. <br> Atomic Studios se enorgullece de proporcionar a los jugadores una experiencia inmersiva y auténtica de batalla naval. Han invertido tiempo y esfuerzo en investigar y recrear meticulosamente los barcos, las armas y las estrategias utilizadas en la vida real para brindar una experiencia de juego convincente y emocionante.</p>
 
        <h2 class="text-white display-6">¿Quienes son los Creadores y participantes de esta empresa?</h2>
            <div id="tupadre">
                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src0']?>" class="col-2 rounded-circle h-75" alt="paul">
                    <p class="col-10 paragraph text-muted fs-5">Paul: es el programador principal. Es el experto detrás de la programación y la lógica del juego. Transforma las ideas y diseños en código funcional, asegurándose de que todas las características y mecánicas del juego se implementen de manera eficiente y sin problemas.</p>
                </div>

                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src1']?>" class="col-2 rounded-circle h-75" alt="torres">
                    <p class="col-10 paragraph text-muted fs-5">Torres: es el diseñador principal del juego. Es el responsable de definir la visión creativa y el diseño general del juego. Trabaja en estrecha colaboración con el resto del equipo para asegurarse de que la jugabilidad sea emocionante, equilibrada y satisfactoria para los jugadores.</p>
                </div>

                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src2']?>" class="col-2 rounded-circle h-75" alt="matias">
                    <p class="col-10 paragraph text-muted fs-5">Monzonpro: es el artista principal. Su creatividad y habilidades artísticas dan vida a los barcos, el entorno marítimo y los efectos visuales del juego. Crea modelos en 3D, texturas y animaciones impresionantes, brindando una experiencia visualmente impactante y realista.</p>
                </div>

                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src3']?>" class="col-2 rounded-circle h-75" alt="sebastian">
                    <p class="col-10 paragraph text-muted fs-5">Sebastian: es el responsable de la música y el sonido. Comprende la importancia de la atmósfera sonora en la inmersión de los jugadores. Compone la música de fondo, los efectos de sonido y las voces, asegurándose de que cada momento del juego esté acompañado por una experiencia auditiva cautivadora y emocionante.</p>
                </div>

                <div class="row m-2"><img src="<?php echo $lang['desarrolladores']['src4']?>" class="col-2 rounded-circle h-75" alt="rordrigou">
                    <p class="col-10 paragraph text-muted fs-5">Rodrigo: se encarga del equilibrio del juego y la optimización. Trabaja en estrecha colaboración con el equipo de diseño y programación para ajustar la dificultad, la progresión y el rendimiento del juego. Realiza pruebas exhaustivas y realiza ajustes para garantizar que los jugadores tengan una experiencia equilibrada y fluida en todas las plataformas.</p>
                </div>
            </div>
    </div>
<?php return; }?>

<div class="text-start" style="margin-top: 4%; margin-bottom: 5%; margin-left: 7.5%; margin-right: 7.5%;" id="devsContentTxt">
    <p class="text-white display-6" name="txtSec1t" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec1t']?></p>
    <p class="paragraph text-muted" name="txtSec1b" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec1b']?></p>
        
    <p class="text-white display-6" name="txtSec2t" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2t']?></p>
        <div id="tupadre">
            <div class="row position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src0']?>" class="col-2 rounded-circle h-75" alt="paul">
                <p class="col-10 paragraph text-muted fs-5" name="txtSec2b1" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b1']?></p>
            </div>
            
            <div class="row mt-3 position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src1']?>" class="col-2 rounded-circle h-75" alt="torres">
                <p class="col-10 paragraph text-muted fs-5" name="txtSec2b2" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b2']?></p>
            </div>
            
            <div class="row mt-3 position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src2']?>" class="col-2 rounded-circle h-75" alt="matias">
                <p class="col-10 paragraph text-muted fs-5" name="txtSec2b3" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b3']?></p>
            </div>
            
            <div class="row mt-3 position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src3']?>" class="col-2 rounded-circle h-75" alt="sebastian">
                <p class="col-10 paragraph text-muted fs-5" name="txtSec2b4" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b4']?></p>
            </div>
            
            <div class="row mt-3 position-relative">
                <input type="file" id="inputFile" class="position-absolute col-2 h-75 opacity-0" accept="image/*" onchange="imgPreview(this);" style="cursor: pointer;" >
                <img src="<?php echo $lang['desarrolladores']['src4']?>" class="col-2 rounded-circle h-75" alt="rordrigou">
                <p class="col-10 paragraph text-muted fs-5" name="txtSec2b5" contenteditable="true"><?php echo $lang['desarrolladores']['txtSec2b5']?></p>
            </div>
        </div>
</div>
<input type="hidden" value="<?php echo $lang['desarrolladores']['title']?>" id="apN" >
<input type="hidden" value="<?php echo $_GET['la']?>" id="language" >
<input type="hidden" value="<?php echo $lang['errors']['alertPage']?>" id="alertMsg" >
<input type="submit" placeholder="<?php echo $lang['input']['submit1']?>" class="form-control" onclick="submitForm('devsContentTxt');">
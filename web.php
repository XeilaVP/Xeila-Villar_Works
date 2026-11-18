<?php
$esInicio = false;
$idPagina = "web";
$titulo = "Web y Producto | Xeila Villar";

require __DIR__ . "/includes/head.php";
?>

    <!-- WEB Y PRODUCTO -->
    <main id="web-portfolio" class="contenedor">

        <div class="contenido m-columna flex m-aic m-jcc">

            <!-- HERO -->
            <section class="web-cabecera">

                <div class="web-superior flex m-jcsb">
                    <span>01 / WEB &amp; PRODUCTO</span>
                </div>

                <div class="web-presentacion flex m-jcsb">

                    <h1>
                        DEL DISEÑO<br>
                        AL CÓDIGO.
                    </h1>

                    <p>
                        Diseño y desarrollo experiencias web
                        y productos digitales, desde la definición
                        de la idea y la experiencia de usuario
                        hasta su implementación.
                    </p>

                </div>

                <div class="web-categorias flex m-jcsb m-aic">

                    <div class="web-categorias-lista flex m-aic">
                        <span>UX/UI</span>
                        <span>—</span>
                        <span>PRODUCTO</span>
                        <span>—</span>
                        <span>DESARROLLO WEB</span>
                    </div>

                    <a href="#proyectos-web" class="web-bajar">
                        <i class="fa-solid fa-arrow-down"></i>
                        PROYECTOS
                    </a>

                </div>

            </section>


            <!-- GRID DE PROYECTOS -->
            <section id="proyectos-web" class="web-proyectos flex m-jcsb m-aic">

                <!-- PROYECTO FREELANCE BOARD -->
                <article class="web-proyecto t-40">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>FREELANCE BOARD</h2>
                        <span>Elogia Media</span>
                    </div>

                    <a href="webs/freelanceConnect.php" class="web-proyecto-imagen" data-proyecto aria-label="Ver Freelance Board">
                        <img src="imagenes/web/producto/freelance-connect-mockup.png" alt="Freelance Board">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-orange">PRODUCTO</b>
                                · DISEÑO · DESARROLLO VIBE-CODING
                            </p>
                            <a href="#" aria-label="Ver Freelance Board">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Diseño y desarrollo de una plataforma operativa
                            para la centralización de los contactos de
                            freelance que trabajan con la empresa ...
                        </p>

                        <p class="web-proyecto-tecnologias">
                            Lovable / React / CSS / Typescript
                        </p>

                    </div>
                </article>

                <!-- PROYECTO EXOBRAIN-->
                <article class="web-proyecto t-30">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>EXOBRAIN</h2>
                        <span>Proyecto personal</span>
                    </div>
                    <a href="webs/exobrain.php" class="web-proyecto-imagen" data-proyecto aria-label="Ver Exobrain">
                        <img src="imagenes/web/producto/exobrain.png" alt="Exobrain">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-blue">PRODUCTO</b>
                                · DISEÑO · DESARROLLO
                            </p>
                            <a href="webs/exobrain.php" data-proyecto aria-label="Ver Exobrain">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="web-proyecto-tecnologias">
                            HTML / CSS / JS
                        </p>

                    </div>
                </article>

                <!-- PROYECTO REPORT -->
                <article class="web-proyecto t-30">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>CUSTOM REPORT</h2>
                        <span>Proyecto personal</span>
                    </div>

                    <a href="webs/customReport.php" class="web-proyecto-imagen" data-proyecto aria-label="Ver Custom Report">
                        <img src="imagenes/web/producto/repo-edit.png" alt="Custom Report">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-orange">PRODUCTO</b>
                                · DISEÑO · DESARROLLO VIBE-CODING
                            </p>
                            <a href="webs/customReport.php" data-proyecto aria-label="Ver Custom Report">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="web-proyecto-tecnologias">
                            Lovable / React / CSS / Typescript
                        </p>

                    </div>
                </article>

                <!-- PROYECTO KRAZ -->
                <article class="web-proyecto t-40">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>KRAZ</h2>
                        <span>Viko Group</span>
                    </div>

                    <a href="webs/kraz.php" class="web-proyecto-imagen" data-proyecto aria-label="Ver Kraz">
                        <img src="imagenes/web/kraz/mockup-kraz.png" alt="Kraz">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-blue">PRODUCTO</b>
                                · DISEÑO · DESARROLLO
                            </p>
                            <a href="webs/kraz.php" data-proyecto aria-label="Ver Kraz">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="web-proyecto-tecnologias">
                            React / CSS / Typescript
                        </p>

                    </div>
                </article>

                <!-- PROYECTO AVON -->
                <article class="web-proyecto t-40">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>AVON</h2>
                        <span>Elogia Media</span>
                    </div>

                    <a href="webs/avon.php" class="web-proyecto-imagen" data-proyecto aria-label="Ver Avon">
                        <img src="imagenes/web/avon/avon.png" alt="Avon">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-blue">LANDING PAGE</b>
                                · DISEÑO · MAQUETACIÓN CMS
                            </p>
                            <a href="webs/avon.php" data-proyecto aria-label="Ver Avon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="web-proyecto-tecnologias">
                            Wordpress / CSS
                        </p>

                    </div>
                </article>

                <!-- PROYECTO blip -->
                <article class="web-proyecto t-40">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>BLIP</h2>
                        <span>Elogia Media</span>
                    </div>

                    <a href="webs/blip.php" class="web-proyecto-imagen"  data-proyecto aria-label="Ver Blip">
                        <img src="imagenes/web/blip/blip-mockup.png" alt="Blip">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-blue">LANDING PAGE</b>
                                · DISEÑO · MAQUETACIÓN
                            </p>
                            <a href="webs/blip.php" data-proyecto aria-label="Ver Blip">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Diseño y desarrollo de una landing page para 
                            la campaña de paid media de Blip.</br>
                            <a href="https://digital.blip.ai/es/blip-meta-conversations-for-business/" target="_blank" rel="noopener noreferrer">Blip & Meta: Conversations for business</a>
                        </p>

                        <p class="web-proyecto-tecnologias">
                            Wordpress / HTML / CSS / Figma
                        </p>

                    </div>
                </article>

                <!-- PROYECTO esue -->
                <article class="web-proyecto t-20">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>ESUE</h2>
                        <span>Viko Group</span>
                    </div>

                    <a href="webs/esue.php" class="web-proyecto-imagen" data-proyecto  aria-label="Ver Esue">
                        <img src="imagenes/web/esue_ebs/esue-mockup.png" alt="Esue">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-blue">PRODUCTO</b>
                                · DISEÑO · DESARROLLO
                            </p>
                            <a href="#" aria-label="Ver Kraz">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="web-proyecto-tecnologias">
                            React / CSS / Typescript
                        </p>

                    </div>
                </article>

                <!-- PROYECTO gorlomi -->
                <article class="web-proyecto t-40">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>GORLOMI</h2>
                        <span>Freelance</span>
                    </div>

                    <a href="#" class="web-proyecto-imagen" aria-label="Ver Kraz">
                        <img src="imagenes/web/gorlomi/gorlomi-home.png" alt="Kraz">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-blue">PRODUCTO</b>
                                · DISEÑO · DESARROLLO
                            </p>
                            <a href="#" aria-label="Ver Kraz">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="web-proyecto-tecnologias">
                            React / CSS / Typescript
                        </p>

                    </div>
                </article>

                <!-- PROYECTO fotografía -->
                <article class="web-proyecto t-30">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>FOTOGRAFIA</h2>
                        <span>Freelance</span>
                    </div>

                    <a href="#" class="web-proyecto-imagen" aria-label="Ver Kraz">
                        <img src="imagenes/web/fotografia/fotografia-mockup.png" alt="Kraz">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-blue">PRODUCTO</b>
                                · DISEÑO · DESARROLLO
                            </p>
                            <a href="#" aria-label="Ver Kraz">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="web-proyecto-tecnologias">
                            React / CSS / Typescript
                        </p>

                    </div>
                </article>

                <!-- PROYECTO restaurante -->
                <article class="web-proyecto t-30">

                    <div class="web-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>RESTAURANTE</h2>
                        <span>Freelance</span>
                    </div>

                    <a href="web/restaurante.php" class="web-proyecto-imagen" data-project aria-label="Ver Restaurante">
                        <img src="imagenes/web/restaurante/restaurante-mockup.png" alt="Restaurante">
                    </a>

                    <div class="web-proyecto-info">

                        <div class="web-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-blue">PRODUCTO</b>
                                · DISEÑO · DESARROLLO
                            </p>
                            <a href="#" aria-label="Ver Kraz">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="web-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="web-proyecto-tecnologias">
                            React / CSS / Typescript
                        </p>

                    </div>
                </article>

            </section>

        </div>

    </main>

    <dialog id="modal-proyecto" class="modal-proyecto">
        <button class="modal-cerrar" aria-label="Cerrar">×</button>
        <div class="modal-contenido"></div>
    </dialog>

<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@7.0.0/dist/vanilla/simpleParallaxVanilla.umd.js"></script>

<?php
require __DIR__ . "/includes/footer.php";
?>

<script src="js/proyectos-modal.js"></script>

</body>
</html>

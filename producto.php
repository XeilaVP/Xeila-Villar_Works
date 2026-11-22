<?php
$esInicio = false;
$idPagina = "producto";
$titulo = "Producto | Xeila Villar";

require __DIR__ . "/includes/head.php";
?>

    <!-- producto Y PRODUCTO -->
    <main id="producto-portfolio" class="contenedor">

        <div class="contenido m-columna flex m-aic m-jcc">

            <!-- HERO -->
            <section class="producto-cabecera">

                <div class="producto-superior flex m-jcsb">
                    <span>01 / producto &amp; PRODUCTO</span>
                </div>

                <div class="producto-presentacion flex m-jcsb">

                    <h1>
                        DEL PROBLEMA<br>
                        A LA SOLUCIÓN.
                    </h1>

                    <p>
                        Diseño y desarrollo productos digitales a partir de necesidades reales. Desde el análisis de procesos y la definición 
                        de la experiencia de usuario hasta la creación de interfaces y herramientas funcionales.
                    </p>

                </div>

                <div class="producto-categorias flex m-jcsb m-aic">

                    <div class="producto-categorias-lista flex m-aic">
                        <span>ESTRATEGIA</span>
                        <span>—</span>
                        <span>DISEÑO DE PRODUCTO</span>
                        <span>—</span>
                        <span>DESARROLLO</span>
                    </div>

                    <a href="#proyectos-producto" class="producto-bajar">
                        <i class="fa-solid fa-arrow-down"></i>
                        PROYECTOS
                    </a>
                </div>
            </section>


            <!-- GRID DE PROYECTOS -->
            <section id="proyectos-producto" class="producto-proyectos flex m-jcsb m-aic">

                <!-- PROYECTO FREELANCE BOARD -->
                <article class="producto-proyecto t-40">

                    <div class="producto-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>FREELANCE BOARD</h2>
                        <span>Elogia Media</span>
                    </div>

                    <a href="productos/freelanceConnect.php" class="producto-proyecto-imagen" data-proyecto aria-label="Ver Freelance Board">
                        <img src="imagenes/producto/freelance-connect-mockup.png" alt="Freelance Board">
                    </a>

                    <div class="producto-proyecto-info">

                        <div class="producto-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-orange">PRODUCTO</b>
                                · DISEÑO · DESARROLLO VIBE-CODING
                            </p>
                            <a href="#" aria-label="Ver Freelance Board">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="producto-proyecto-descripcion">
                            Diseño y desarrollo de una plataforma operativa
                            para la centralización de los contactos de
                            freelance que trabajan con la empresa ...
                        </p>

                        <p class="producto-proyecto-tecnologias">
                            Lovable / React / CSS / Typescript
                        </p>

                    </div>
                </article>

                <!-- PROYECTO EXOBRAIN-->
                <article class="producto-proyecto t-40">

                    <div class="producto-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>EXOBRAIN</h2>
                        <span>Proyecto personal</span>
                    </div>
                    <a href="productos/exobrain.php" class="producto-proyecto-imagen" data-proyecto aria-label="Ver Exobrain">
                        <img src="imagenes/producto/exobrain.png" alt="Exobrain">
                    </a>

                    <div class="producto-proyecto-info">

                        <div class="producto-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-blue">PRODUCTO</b>
                                · DISEÑO · DESARROLLO
                            </p>
                            <a href="productos/exobrain.php" data-proyecto aria-label="Ver Exobrain">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="producto-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="producto-proyecto-tecnologias">
                            HTML / CSS / JS
                        </p>

                    </div>
                </article>

                <!-- PROYECTO REPORT -->
                <article class="producto-proyecto t-40">

                    <div class="producto-proyecto-cabecera flex m-jcsb m-aic">
                        <h2>CUSTOM REPORT</h2>
                        <span>Proyecto personal</span>
                    </div>

                    <a href="productos/customReport.php" class="producto-proyecto-imagen" data-proyecto aria-label="Ver Custom Report">
                        <img src="imagenes/producto/repo-edit.png" alt="Custom Report">
                    </a>

                    <div class="producto-proyecto-info">

                        <div class="producto-proyecto-etiquetas flex m-jcsb m-aic">
                            <p>
                                <b class="accent-orange">PRODUCTO</b>
                                · DISEÑO · DESARROLLO VIBE-CODING
                            </p>
                            <a href="productos/customReport.php" data-proyecto aria-label="Ver Custom Report">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <p class="producto-proyecto-descripcion">
                            Lorem ipsum
                        </p>

                        <p class="producto-proyecto-tecnologias">
                            Lovable / React / CSS / Typescript
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

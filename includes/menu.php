<section class="viewport">
<div id="scroll-container" class="scroll-container">
<div class="content">

    <!-- BOTÓN VOLVER ARRIBA -->
    <div class="cta">
        <div id="btn-to-top" class="flex m-jcc m-aic">
            <a href="#<?= $idPagina ?>">
                <i class="fa-solid fa-chevron-up"></i>
            </a>
        </div>
    </div>

    <!-- HEADER / MENÚ -->
    <header class="contenedor <?= $esInicio ? '' : 'menu-header' ?> m-jcc">

        <div id="hero" class="contenido m-100 t-90 m-jcc m-aic m-columna">

            <!-- MENÚ SUPERIOR -->
            <div id="menu-top" class="flex m-jcsb m-aic">
                <a href="web.php">Web UX/UI</a>
                <a href="marketing.php">Marketing</a>
            </div>

            <div class="title-pag flex m-jcc m-aic m-columna m-90 p-100">

                <?php if ($esInicio): ?>

                    <!-- HERO EXCLUSIVO DE LA HOME -->
                    <img id="logo-hero"
                         src="imagenes/logo.png"
                         alt="logotipo-xeila-villar"
                         data-aos="fade-right"
                         data-aos-offset="50"
                         data-aos-delay="50"
                         data-aos-duration="800"
                         data-aos-easing="ease-in-out"
                         data-aos-mirror="true">

                    <div class="flex color-dark m-aic m-jcc m-100 mb-15"
                         data-aos="fade-left"
                         data-aos-offset="50"
                         data-aos-delay="50"
                         data-aos-duration="800"
                         data-aos-easing="ease-in-out"
                         data-aos-mirror="true">

                        <h1>Design &amp; &lt;Code&gt;</h1>

                    </div>

                <?php endif; ?>

                <!-- BOTÓN CENTRAL -->
                <div class="menu-button color-dark">

                    <a href="<?= $esInicio ? '#inicio' : 'index.php' ?>"
                       class="menu-logo"
                       aria-label="Volver al inicio">
                        <strong>XEILA</strong>VILLAR
                    </a>

                    <div class="abrir-menu cursor-pointer">
                        <i class="fa-solid fa-chevron-left"></i>
                        <i class="fa-solid fa-chevron-left"></i>
                        MENÚ
                        <i class="fa-solid fa-chevron-right"></i>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>

                    <div class="cerrar-menu cursor-pointer">
                        <i class="fa-solid fa-chevron-right"></i>
                        <i class="fa-solid fa-chevron-right"></i>
                        MENÚ
                        <i class="fa-solid fa-chevron-left"></i>
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>

                </div>

            </div>

            <!-- MENÚ INFERIOR -->
            <div id="menu-bottom" class="flex m-jcsb m-aic cursor-pointer">
                <a href="grafico.php">Gráfico</a>
                <a href="ilustracion.php">Ilustración</a>
            </div>

        </div>

    </header>
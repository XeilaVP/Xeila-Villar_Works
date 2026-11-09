<footer class="contenedor color-light color-bgDark">
    <div class="contenido m-columna m-jsb m-aic m-100">

        <div class="contacto accent-orange">

            <a class="contacto-item cta cursor-pointer" href="tel:+34620814546">
                <span class="contacto-icono">
                    <i class="fa-solid fa-phone"></i>
                </span>
                <span>620814546</span>
            </a>

            <a class="contacto-item contacto-email cta" href="mailto:xeilavillar@gmail.com">
                <span class="contacto-icono">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <span>xeilavillar@gmail.com</span>
            </a>

            <a class="contacto-item contacto-linkedin cta"
               href="https://es.linkedin.com/in/xeila-villar"
               target="_blank"
               rel="noopener noreferrer"
               aria-label="LinkedIn">
                <span class="contacto-icono">
                    <i class="fa-brands fa-linkedin-in"></i>
                </span>
                <span>Linkedin</span>
            </a>

            <a id="cvButton"
               class="flex m-aic m-jcc accent-bgOrange color-light button"
               href="https://www.behance.net/xeilavillar"
               target="_blank">
                Descargar CV
            </a>

        </div>

        <?php if ($esInicio): ?> <!-- solo en la home -->

        <div class="subfooter-dual flex m-100 p-100 t-100">
            <div class="left m-jcc flex">
                <div class="mb-15 t-60">
                    <h2 class="accent-orange">CREATIVI<br>DAD</h2>
                    <span class="footer-arrow">&rarr;</span>
                </div>
            </div>

            <div class="right m-jcc flex">
                <div class="mb-15 t-60">
                    <h2 class="accent-blue">FUNCIONA<br>LIDAD</h2>
                    <span class="footer-arrow">&larr;</span>
                </div>
            </div>
        </div>

        <?php endif; ?>
    </div>
</footer>

<!-- CURSOR PERSONALIZADO -->
<div class="cursor-background">
    <div class="cursor-background-punto"></div>
</div>

<!-- CIERRE DE CONTENEDORES ABIERTOS EN menu.php -->
</div>
</div>
</section>
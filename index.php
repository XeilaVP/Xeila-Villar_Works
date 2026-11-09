<?php
$esInicio = true;
$titulo = "Portfolio | Xeila Villar";

require __DIR__ . "/includes/head.php";
?>

<!--texto intro-->
<section id="intro" class="color-bgDark contenedor m-aic m-jcc m-100">
    <div class="contenido m-columna m-jcc m-aic m-100">
        <div class="producto hover-imagen">
            <p class="color-light">
                PRODUCTO
            </p>
            <img src="imagenes/branding/BOLSA.jpg" alt="">
        </div>

        <div class="desarrollo hover-imagen">
            <p class="color-light">
                DESARROLLO <b class="accent-blue">WEB</b>
            </p>
            <img src="imagenes/branding/BOLSA.jpg" alt="">
        </div>

        <div class="diseno-web hover-imagen">
            <p class="color-light">
                <span class="noto-font" style="font-weight:400; font-style:italic;">DISEÑO</span> WEB
            </p>
            <img src="imagenes/branding/BOLSA.jpg" alt="">
        </div>
        <div class="marketing hover-imagen">
            <p class="color-light">
               <b class="accent-orange">MARKETING</b> DIGITAL
            </p>
            <img src="imagenes/branding/BOLSA.jpg" alt="">
        </div>
        <div class="direccion-arte hover-imagen">
            <p class="color-light">
                DIRECCIÓN DE ARTE
            </p>
            <img src="imagenes/branding/BOLSA.jpg" alt="">
        </div>

        <div class="diseno-grafico hover-imagen">
            <p class="color-light">
                <b class="accent-blue">DISEÑO</b> GRÁFICO
            </p>
            <img src="imagenes/branding/BOLSA.jpg" alt="">
        </div>

        <div class="ia-generativa hover-imagen">
            <p class="color-light">
                IA GENERATIVA
            </p>
            <img src="imagenes/branding/BOLSA.jpg" alt="">
        </div>

        <div class="ilustracion hover-imagen">
            <p class="accent-orange noto-font">
                ILUSTRACIÓN
            </p>
            <img src="imagenes/branding/BOLSA.jpg" alt="">
        </div>
    </div>
</section>
    
<section id="about" class="contenedor color-light color-bgDark m-jcc m-aic m-100">
    <div class="contenido m-columna m-aic m-jcc m-90 t-50">
        <h2>Hola, soy Xeila. Diseñadora gráfica y web con años de experiencia en proyectos digitales, 
        especializada en UX/UI y recién titulada en Desarrollo de Aplicaciones Web.
        </h2> 
        <h3 class="m-90 p-70">Mi experiencia en diseño me ha enseñado <i class="accent-orange">la importancia de entender las necesidades de los usuarios </i>
        antes de plantear soluciones. Ahora combino esa visión creativa con mis conocimientos de 
        desarrollo front-end y back-end, lo que me permite participar en todo el proceso, 
        desde la idea inicial y el diseño de la interfaz hasta su implementación en código.</h3>
    </div>    
</section> 

<?php
require __DIR__ . "/includes/footer.php";
?>

<script>
(() => {
    const intro = document.querySelector("#intro");
    const aboutHeading = document.querySelector("#about h2");

    if (
        !("IntersectionObserver" in window) ||
        window.matchMedia("(prefers-reduced-motion: reduce)").matches
    ) {
        return;
    }

    if (intro) {
        const introItems = [...intro.querySelectorAll(".contenido > div")];

        introItems.forEach((item, index) => {
            item.style.setProperty("--intro-index", index);
        });
        intro.classList.add("intro-animation-ready");

        const introObserver = new IntersectionObserver(entries => {
            intro.classList.toggle(
                "intro-entered",
                entries.some(entry => entry.isIntersecting)
            );
        }, { threshold: 0.15 });

        introObserver.observe(intro);
    }

    if (aboutHeading) {
        const text = aboutHeading.textContent.replace(/\s+/g, " ").trim();
        const words = text.split(" ");
        const fragment = document.createDocumentFragment();
        const wordElements = [];

        aboutHeading.setAttribute("aria-label", text);

        words.forEach((word, index) => {
            const wordElement = document.createElement("span");
            wordElement.className = "about-line-word";
            wordElement.textContent = word;
            wordElements.push(wordElement);
            fragment.appendChild(wordElement);

            if (index < words.length - 1) {
                fragment.appendChild(document.createTextNode(" "));
            }
        });

        aboutHeading.replaceChildren(fragment);

        const prepareAnimation = () => {
            aboutHeading.classList.add("about-heading-ready");

            let lineTop;
            let lineIndex = -1;

            wordElements.forEach(wordElement => {
                const currentTop = wordElement.getBoundingClientRect().top;

                if (lineTop === undefined || Math.abs(currentTop - lineTop) > 1) {
                    lineTop = currentTop;
                    lineIndex += 1;
                }

                wordElement.style.setProperty("--line-index", lineIndex);
            });

            const aboutObserver = new IntersectionObserver(entries => {
                aboutHeading.classList.toggle(
                    "about-entered",
                    entries.some(entry => entry.isIntersecting)
                );
            }, { threshold: 0.15 });

            aboutObserver.observe(aboutHeading);
        };

        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.then(prepareAnimation);
        } else {
            prepareAnimation();
        }
    }
})();

  AOS.init();
</script>
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.7.1/dist/dotlottie-wc.js" type="module"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollToPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/TextPlugin.min.js"></script>
<script src="script.js"></script>
<script src="myCustomCode.js"></script>
</body>
</html>
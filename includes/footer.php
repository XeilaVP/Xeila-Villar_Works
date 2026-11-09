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
<script src="script.js"></script>
document.addEventListener("DOMContentLoaded", () => {

    // =========================================
    // MENÚ
    // =========================================

    const esPaginaInterior = $("body").hasClass("seccion-pags");
    const esHome = $("body").attr("id") === "inicio";
    const esMovil = () => window.matchMedia("(max-width: 700px)").matches;

    const menu = $("#menu-top, #menu-bottom");
    const menuBottom = $("#menu-bottom");
    const menuButton = $(".menu-button");
    const btnToTop = $("#btn-to-top");

    let scrollAnterior = $(window).scrollTop();
    let movilAnterior = esMovil();

    // Las páginas interiores comienzan con el menú abierto
    if (esPaginaInterior) {
        menu.addClass("menu-abierto");
    }

    function actualizarBotones() {
        const abierto = menu.hasClass("menu-abierto");

        $(".abrir-menu").toggle(!abierto);
        $(".cerrar-menu").toggle(abierto);
    }

    function actualizarMenu(desdeScroll = false) {

        const scrollActual = $(window).scrollTop();
        const hayScroll = scrollActual > 10;
        const movil = esMovil();

        const desplazado = esPaginaInterior || hayScroll;

        menuBottom.toggleClass("desplazamiento", desplazado);
        menuButton.toggleClass("desplazamiento", desplazado);
        btnToTop.toggleClass("btn-entrando", hayScroll);

        // Contraste del logotipo en la home
        if (esHome) {
            const alturaHero = $("header").first().outerHeight() || 0;

            $("body").toggleClass(
                "menu-sobre-oscuro",
                scrollActual >= alturaHero
            );
        }

        if (!movil) {
            // Desktop: navegación visible fuera del hero
            if (esPaginaInterior || hayScroll) {
                menu.addClass("menu-abierto");
            }
        } else {
            // Móvil: cerrar al desplazarse
            if (
                (desdeScroll && hayScroll && scrollActual !== scrollAnterior) ||
                (!movilAnterior && hayScroll)
            ) {
                menu.removeClass("menu-abierto");
            }
        }

        // Recuperar estado inicial de la home
        if (esHome && !hayScroll && scrollAnterior > 10) {
            menu.removeClass("menu-abierto");
        }

        actualizarBotones();

        scrollAnterior = scrollActual;
        movilAnterior = movil;
    }

    actualizarMenu();

    $(window).on("scroll", () => actualizarMenu(true));

    $(window).on("resize", () => actualizarMenu());

    $(".abrir-menu, .cerrar-menu").on("click", () => {
        menu.toggleClass("menu-abierto");
        actualizarBotones();
    });


    // =========================================
    // CURSOR PERSONALIZADO
    // =========================================

    const cursor = document.querySelector(".cursor-background");

    if (!cursor) return;

    document.querySelectorAll("a, button, .cta").forEach(element => {
        element.classList.add("cursor-pointer");
    });

    document.addEventListener("mousemove", event => {

        const actualizarCursor = () => {

            const x = event.clientX;
            const y = event.clientY;

            cursor.style.left = `${x - cursor.offsetWidth / 2}px`;
            cursor.style.top = `${y - cursor.offsetHeight / 2}px`;

            const elemento = document.elementFromPoint(x, y);

            if (esHome) {

                // Comportamiento original de la home
                const interactivo = !!elemento &&
                    elemento.classList.contains("cursor-pointer");

                cursor.classList.toggle("pointer", interactivo);

                cursor.style.transform = interactivo
                    ? "scale(1.2)"
                    : "scale(0.2)";

            } else {

                // Comportamiento original de las páginas interiores
                const interactivo = !!elemento &&
                    !!elemento.closest(".cursor-pointer");

                cursor.classList.toggle("pointer", interactivo);
            }
        };

        if (esHome) {
            setTimeout(actualizarCursor, 40);
        } else {
            actualizarCursor();
        }

    });

});
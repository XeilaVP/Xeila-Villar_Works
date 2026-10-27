document.addEventListener("DOMContentLoaded", () => {
    

$(function () {

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

        // Contraste del nombre en la home
        if (esHome) {
            const alturaHero = $("header").first().outerHeight() || 0;

            $("body").toggleClass(
                "menu-sobre-oscuro",
                scrollActual >= alturaHero
            );
        }

        if (!movil) {
            // Desktop/tablet: navegación siempre visible fuera del hero
            if (esPaginaInterior || hayScroll) {
                menu.addClass("menu-abierto");
            }
        } else {
            // Móvil: cerrar al desplazarse o pasar desde desktop
            if (
                (desdeScroll && hayScroll && scrollActual !== scrollAnterior) ||
                (!movilAnterior && hayScroll)
            ) {
                menu.removeClass("menu-abierto");
            }
        }

        // Al regresar al principio de la home, recuperar estado inicial
        if (esHome && !hayScroll && scrollAnterior > 10) {
            menu.removeClass("menu-abierto");
        }

        actualizarBotones();

        scrollAnterior = scrollActual;
        movilAnterior = movil;
    }

    actualizarMenu();

    $(window).on("scroll", function () {
        actualizarMenu(true);
    });

    $(window).on("resize", function () {
        actualizarMenu();
    });

    $(".abrir-menu, .cerrar-menu").on("click", function () {
        menu.toggleClass("menu-abierto");
        actualizarBotones();
    });

});


    
    
    // texto en scroll
  
  gsap.registerPlugin(ScrollTrigger,ScrollToPlugin,TextPlugin);

// Efecto parallax
ScrollTrigger.create({
    trigger: ".contenedor-parallax",
    start: "top top",
    end: "bottom bottom",
    pin: ".parallaxbg", // Pin el fondo dentro de la sección
    pinSpacing: false,
    onEnter: () => gsap.to(".parallaxbg", { opacity: 1, duration: 0.5 }),
    onLeave: () => gsap.to(".parallaxbg", { opacity: 0, duration: 0.3 }),
    onEnterBack: () => gsap.to(".parallaxbg", { opacity: 1, duration: 0.5 }),
    onLeaveBack: () => gsap.to(".parallaxbg", { opacity: 0, duration: 0.3 })
});
    let mm = gsap.matchMedia();
// Parallax por tarjeta

mm.add("(min-width: 760px)", () => {
  // SOLO desktop / tablet grande
  gsap.utils.toArray(".parallax-tarjets > a").forEach((card, i) => {
    const speed =
      parseFloat(card.dataset.speed) ||
      gsap.utils.mapRange(0, 10, 0.7, 1.3, i % 10);

    gsap.fromTo(
      card,
      { y: 40 * speed },
      {
        y: -40 * speed,
        ease: "none",
        scrollTrigger: {
          trigger: ".contenedor-parallax",
          start: "top top",
          end: "center center",
          scrub: 0.6
        }
      }
    );
  });
});

  
// efecto texto relleno
gsap.to(".text span", {
  backgroundPositionX: "0%",
  stagger: 1,
  scrollTrigger: {
    trigger: ".text",
    markers: false,
    scrub: 0.8,
    start: "top center",
    end: "bottom center"
  }
});
  
let items = gsap.utils.toArray(".items"),
    pageWrapper = document.querySelector(".page-wrapper");

items.forEach((container, i) => {
  let localItems = container.querySelectorAll(".item"),
      distance = () => {
        let lastItemBounds = localItems[localItems.length-1].getBoundingClientRect(),
            containerBounds = container.getBoundingClientRect();
        return Math.max(0, (lastItemBounds.right - containerBounds.right));
      };
  gsap.to(container, {
    x: () => -distance(), // make sure it dynamically calculates things so that it adjusts to resizes
    ease: "none",
    scrollTrigger: {
      trigger: container,
      start: "center center",
      pinnedContainer: pageWrapper,
      end: () => "+=" + distance(),
      pin: pageWrapper,
      scrub: 1.5,
      anticipatePin: 1,        // 👈 reduce salto al pin
      fastScrollEnd: true,     // 👈 cuando haces scroll rápido, aterriza suave
      invalidateOnRefresh: true // will recalculate any function-based tween values on resize/refresh (making it responsive)
    }
  });
});
  
gsap.registerPlugin(Draggable);
	var drag = document.querySelector(".scrollx-section");
	var trigger;

Draggable.create(drag, {
  type:"x , y", 
  onPress: () => trigger.kill(false),
  onRelease: createTrigger
});

function createTrigger() {
  trigger = ScrollTrigger.create({
    animation: gsap.to(drag, { x: 500, ease: "none" }),
    scrub: 1
  });
}
createTrigger();
});

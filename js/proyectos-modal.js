
document.addEventListener("DOMContentLoaded", () => {

    const modal = document.querySelector("#modal-proyecto");
    if (!modal) return;

    const contenido = modal.querySelector(".modal-contenido");
    const cerrar = modal.querySelector(".modal-cerrar");

    let tooltips = [];

    // ABRIR PROYECTOS
    document.querySelectorAll("[data-proyecto]").forEach(enlace => {

        enlace.addEventListener("click", async (e) => {
            e.preventDefault();

            const ruta = enlace.getAttribute("href");

            try {
                const respuesta = await fetch(ruta);

                if (!respuesta.ok) {
                    throw new Error("Error al cargar el proyecto");
                }

                contenido.innerHTML = await respuesta.text();

                modal.showModal();
                modal.scrollTop = 0;
                document.body.style.overflow = "hidden";

                // INICIALIZAR PUNTOS INTERACTIVOS
                // Después de insertar el HTML del proyecto.

                const puntos = contenido.querySelectorAll(
                    ".punto-interactivo"
                );

                if (puntos.length && typeof window.tippy === "function") {

                    tooltips = window.tippy(puntos, {
                        appendTo: () => modal,
                        placement: "top",
                        trigger: "mouseenter focus click",
                        maxWidth: 280,
                        interactive: false
                    });

                }

            } catch (error) {
                console.error(error);
            }
        });

    });


    // NAVEGACIÓN DE CARRUSELES
    // Delegación de eventos para contenido dinámico.

    contenido.addEventListener("click", (e) => {

        const boton = e.target.closest(".carrusel-btn");
        if (!boton) return;

        const carrusel = boton.closest(".carrusel");
        const pista = carrusel?.querySelector(".carrusel-pista");

        if (!pista || !pista.clientWidth) return;

        const imagenes = pista.querySelectorAll("img");
        const direccion = Number(boton.dataset.dir);

        const actual = Math.round(
            pista.scrollLeft / pista.clientWidth
        );

        const siguiente = Math.max(
            0,
            Math.min(imagenes.length - 1, actual + direccion)
        );

        pista.scrollTo({
            left: siguiente * pista.clientWidth,
            behavior: "smooth"
        });

    });


    // CERRAR MODAL
    cerrar.addEventListener("click", () => modal.close());

    // CERRAR AL PULSAR FUERA
    modal.addEventListener("click", (e) => {
        if (e.target === modal) modal.close();
    });

    // LIMPIAR AL CERRAR (incluido ESC)
    modal.addEventListener("close", () => {

        tooltips.forEach(instance => instance.destroy());
        tooltips = [];

        document.body.style.overflow = "";
        contenido.innerHTML = "";

    });

});

document.addEventListener("DOMContentLoaded", () => {

    const modal = document.querySelector("#modal-proyecto");
    const contenido = modal.querySelector(".modal-contenido");
    const cerrar = modal.querySelector(".modal-cerrar");

    // ABRIR MODAL
    document.querySelectorAll("[data-proyecto]").forEach(enlace => {

        enlace.addEventListener("click", async (e) => {
            e.preventDefault();

            const ruta = enlace.getAttribute("href");

            try {
                const respuesta = await fetch(ruta);

                if (!respuesta.ok) throw new Error("Error al cargar el proyecto");

                contenido.innerHTML = await respuesta.text();

                modal.showModal();
                document.body.style.overflow = "hidden";

            } catch (error) {
                console.error(error);
            }
        });
    });

    // CERRAR MODAL
    cerrar.addEventListener("click", () => modal.close());

    // CERRAR AL HACER CLIC FUERA
    modal.addEventListener("click", (e) => {
        if (e.target === modal) modal.close();
    });

    // RESTAURAR SCROLL (también al cerrar con ESC)
    modal.addEventListener("close", () => {
        document.body.style.overflow = "";
        contenido.innerHTML = "";
    });

});
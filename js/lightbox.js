/* Visor global de capturas: también funciona con proyectos cargados dinámicamente. */
(() => {
    function iniciarLightbox() {
        const visor = document.createElement('dialog');
        visor.className = 'lightbox';
        visor.setAttribute('aria-label', 'Visor de imágenes del proyecto');
        visor.innerHTML = `
            <div class="lightbox-barra">
                <span class="lightbox-contador" aria-live="polite"></span>
                <div class="lightbox-herramientas">
                    <button type="button" data-lightbox="menos" aria-label="Reducir zoom">−</button>
                    <button type="button" data-lightbox="mas" aria-label="Ampliar zoom">+</button>
                    <button type="button" data-lightbox="restablecer" aria-label="Restablecer zoom">100%</button>
                    <button type="button" data-lightbox="cerrar" aria-label="Cerrar visor">×</button>
                </div>
            </div>
            <div class="lightbox-vista">
                <img alt="" draggable="false">
            </div>
            <div class="lightbox-navegacion">
                <button type="button" data-lightbox="anterior" aria-label="Imagen anterior">←</button>
                <button type="button" data-lightbox="siguiente" aria-label="Imagen siguiente">→</button>
            </div>`;
        document.body.appendChild(visor);

        const vista = visor.querySelector('.lightbox-vista');
        const imagen = vista.querySelector('img');
        const contador = visor.querySelector('.lightbox-contador');
        const navegacion = visor.querySelector('.lightbox-navegacion');

        let imagenes = [];
        let indice = 0;
        let escala = 1;
        let desplazamientoX = 0;
        let desplazamientoY = 0;
        let gesto = null;

        function transformar() {
            imagen.style.transform = `translate(${desplazamientoX}px, ${desplazamientoY}px) scale(${escala})`;
            vista.classList.toggle('ampliada', escala > 1);
        }

        function zoom(valor) {
            escala = Math.min(4, Math.max(1, valor));
            if (escala === 1) {
                desplazamientoX = 0;
                desplazamientoY = 0;
            }
            transformar();
        }

        function mostrar(posicion) {
            indice = (posicion + imagenes.length) % imagenes.length;
            const original = imagenes[indice];
            imagen.src = original.currentSrc || original.src;
            imagen.alt = original.alt || 'Captura del proyecto';
            contador.textContent = `${indice + 1} / ${imagenes.length}`;
            navegacion.hidden = imagenes.length < 2;
            zoom(1);
        }

        // La delegación detecta también las capturas insertadas mediante fetch().
        document.addEventListener('click', (evento) => {
            const original = evento.target.closest('img');
            if (!original || !original.closest('.proyecto-detalle') || original.closest('a, button')) return;

            const pista = original.closest('.carrusel-pista');
            imagenes = pista ? [...pista.querySelectorAll('img')] : [original];
            if (!imagenes.length) return;

            mostrar(imagenes.indexOf(original));
            visor.showModal();
        });

        visor.addEventListener('click', (evento) => {
            const boton = evento.target.closest('button[data-lightbox]');
            if (!boton) return;
            const accion = boton.dataset.lightbox;
            if (accion === 'cerrar') visor.close();
            if (accion === 'anterior') mostrar(indice - 1);
            if (accion === 'siguiente') mostrar(indice + 1);
            if (accion === 'mas') zoom(escala + 0.5);
            if (accion === 'menos') zoom(escala - 0.5);
            if (accion === 'restablecer') zoom(1);
        });

        visor.addEventListener('keydown', (evento) => {
            if (evento.key === 'ArrowLeft' && imagenes.length > 1) {
                evento.preventDefault();
                mostrar(indice - 1);
            } else if (evento.key === 'ArrowRight' && imagenes.length > 1) {
                evento.preventDefault();
                mostrar(indice + 1);
            }
            // Escape cierra el <dialog> de forma nativa.
        });

        vista.addEventListener('dblclick', () => zoom(escala > 1 ? 1 : 2));
        vista.addEventListener('wheel', (evento) => {
            evento.preventDefault();
            zoom(escala + (evento.deltaY < 0 ? 0.25 : -0.25));
        }, { passive: false });

        vista.addEventListener('pointerdown', (evento) => {
            if (evento.pointerType === 'mouse' && evento.button !== 0) return;
            gesto = {
                id: evento.pointerId,
                x: evento.clientX,
                y: evento.clientY,
                originalX: desplazamientoX,
                originalY: desplazamientoY
            };
            vista.setPointerCapture(evento.pointerId);
        });

        vista.addEventListener('pointermove', (evento) => {
            if (!gesto || gesto.id !== evento.pointerId || escala === 1) return;
            desplazamientoX = gesto.originalX + evento.clientX - gesto.x;
            desplazamientoY = gesto.originalY + evento.clientY - gesto.y;
            transformar();
        });

        vista.addEventListener('pointerup', (evento) => {
            if (!gesto || gesto.id !== evento.pointerId) return;
            const deltaX = evento.clientX - gesto.x;
            const deltaY = evento.clientY - gesto.y;
            if (escala === 1 && imagenes.length > 1 && Math.abs(deltaX) > 55 && Math.abs(deltaX) > Math.abs(deltaY)) {
                mostrar(indice + (deltaX < 0 ? 1 : -1));
            }
            gesto = null;
        });
        vista.addEventListener('pointercancel', () => { gesto = null; });

        visor.addEventListener('close', () => {
            imagenes = [];
            imagen.removeAttribute('src');
            gesto = null;
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', iniciarLightbox, { once: true });
    } else {
        iniciarLightbox();
    }
})();

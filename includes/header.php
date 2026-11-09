<?php
// Configuración de la página
$esInicio = $esInicio ?? false;
$titulo = $titulo ?? "Portfolio | Xeila Villar";
$idPagina = $idPagina ?? ($esInicio ? "inicio" : "web");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TÍTULO DINÁMICO -->
    <title><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?></title>

    <!-- ESTILOS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estructura.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <!-- GOOGLE ICONS -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=east">

    <!-- TIPOGRAFÍAS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- JAVASCRIPT -->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/jquery.nav.js"></script>

    <!-- ANIMACIONES -->
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>

    <?php if ($esInicio): ?>

    <!-- CURSOR PERSONALIZADO: HOME -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('a, button, .cta').forEach(element => {
                element.classList.add('cursor-pointer');
            });
        });

        document.addEventListener('mousemove', (event) => {
            const cursorBackground = document.querySelector('.cursor-background');

            setTimeout(() => {
                const mouseX = event.clientX;
                const mouseY = event.clientY;

                cursorBackground.style.left =
                    `${mouseX - cursorBackground.offsetWidth / 2}px`;

                cursorBackground.style.top =
                    `${mouseY - cursorBackground.offsetHeight / 2}px`;

                const elementUnderCursor =
                    document.elementFromPoint(mouseX, mouseY);

                if (elementUnderCursor &&
                    elementUnderCursor.classList.contains("cursor-pointer")) {

                    cursorBackground.classList.add("pointer");
                    cursorBackground.style.transform = "scale(1.2)";

                } else {
                    cursorBackground.classList.remove("pointer");
                    cursorBackground.style.transform = "scale(0.2)";
                }

            }, 40);
        });
    </script>

    <?php endif; ?>

</head>

<body id="<?= htmlspecialchars($idPagina, ENT_QUOTES, 'UTF-8') ?>"
      <?= $esInicio ? '' : 'class="seccion-pags"' ?>>
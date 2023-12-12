<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectura de Texto al Mover el Cursor</title>
    <style>
        .contenedor-limitado {
            max-width: 500px;
            /* Establece el ancho máximo deseado del contenedor */
            overflow: hidden;
            /* Maneja el desbordamiento de texto si es necesario */
        }
    </style>
</head>

<body>
    <div class="contenedor-limitado">
        <h1 class="elemento-para-leer">Lectura de Texto al Mover el Cursor</h1>
        <p class="elemento-para-leer">Este es el primer texto.</p>
        <input class="elemento-para-leer" type="text" value="Este es un input de texto." />
        <button class="elemento-para-leer">Este es un botón que será leído.</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var synth = window.speechSynthesis;
            var vozActual = null;

            var elementosParaLeer = document.querySelectorAll('.elemento-para-leer');

            elementosParaLeer.forEach(function(elemento) {
                elemento.addEventListener('mouseover', function() {
                    detenerLectura();
                    leerTexto(elemento);
                });
            });

            function leerTexto(elemento) {
                var texto = obtenerTextoElemento(elemento);

                if ('speechSynthesis' in window) {
                    vozActual = new SpeechSynthesisUtterance(texto);
                    synth.speak(vozActual);
                } else {
                    alert('La síntesis de voz no es compatible con este navegador.');
                }
            }

            function detenerLectura() {
                if (vozActual !== null) {
                    synth.cancel();
                    vozActual = null;
                }
            }

            function obtenerTextoElemento(elemento) {
                if (elemento.tagName.toLowerCase() === 'input') {
                    return elemento.value;
                } else {
                    return elemento.innerText;
                }
            }
        });
    </script>
</body>

</html>
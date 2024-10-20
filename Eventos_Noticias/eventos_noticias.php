<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos y Noticias</title>
    <link rel="stylesheet" href="../Home/Main/css/estilos.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .content-section {
            padding: 20px;
            background-color: white;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #b22222;
            text-align: center;
            margin-bottom: 20px;
        }

        .event, .news {
            margin-bottom: 40px; /* Aumenta el margen inferior */
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px;
        }

        .event-title, .news-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 5px;
        }

        .event-description, .news-description {
            font-size: 1em;
            color: #666;
            margin-bottom: 10px;
        }

        .event-date, .news-date {
            font-size: 0.9em;
            color: #999;
            margin-bottom: 20px; /* Espacio para la imagen */
        }

        /* Estilo para las imágenes */
        .event-image, .news-image {
            width: 100%;
            height: auto;
            max-width: 500px; /* Ajusta el tamaño máximo de la imagen */
            margin-bottom: 20px; /* Espacio debajo de la imagen */
        }

        /* Estilo mejorado del combo box */
        .select-box {
            text-align: center;
            margin-bottom: 20px;
        }

        .select-box label {
            font-size: 1.2em;
            color: #333;
        }

        .select-box select {
            padding: 10px 15px;
            font-size: 1em;
            color: #333;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            margin-left: 10px;
            width: 200px;
        }

        .select-box select:hover {
            border-color: #b22222;
        }

        .select-box select:focus {
            outline: none;
            border-color: #b22222;
            box-shadow: 0 0 5px rgba(178, 34, 34, 0.5);
        }

        .select-box option {
            font-size: 1em;
        }
    </style>
</head>

<body>
    <!-- Sección de Eventos -->
    <div id="events" class="content-section">
        <h2>Eventos</h2>

        <!-- Combo box para seleccionar el tipo de evento -->
        <div class="select-box">
            <label for="eventType">Selecciona un tipo de evento: </label>
            <select id="eventType" onchange="filterEvents()">
                <option value="all">Todos</option>
                <option value="Cultura">Cultura</option>
                <option value="Académico">Académico</option>
                <option value="Deporte">Deporte</option>
            </select>
        </div>

        <!-- Aquí se desplegarán los eventos de la base de datos -->
        <div id="eventList">
            <div class="event" data-type="Cultura">
                <div class="event-title">Título de Evento 1</div>
                <img src="img/evento1.jpg" alt="Imagen del Evento 1" class="event-image"> <!-- Imagen del evento -->
                <div class="event-description">Descripción breve del evento 1.</div>
                <div class="event-date">Fecha: 2024-11-05 | Tipo: Cultura | Ubicación: Auditorio Principal</div>
            </div>
            <div class="event" data-type="Académico">
                <div class="event-title">Título de Evento 2</div>
                <img src="img/evento2.jpg" alt="Imagen del Evento 2" class="event-image"> <!-- Imagen del evento -->
                <div class="event-description">Descripción breve del evento 2.</div>
                <div class="event-date">Fecha: 2024-11-10 | Tipo: Académico | Ubicación: Sala de Conferencias</div>
            </div>
        </div>
    </div>

    <!-- Sección de Noticias -->
    <div id="news" class="content-section">
        <h2>Últimas Noticias</h2>
        <!-- Aquí se desplegarán las noticias de la base de datos -->
        <div class="news">
            <div class="news-title">Título de Noticia 1</div>
            <img src="img/noticia1.jpg" alt="Imagen de Noticia 1" class="news-image"> <!-- Imagen de la noticia -->
            <div class="news-description">Descripción breve de la noticia 1.</div>
            <div class="news-date">Fecha: 2024-10-20</div>
        </div>
        <div class="news">
            <div class="news-title">Título de Noticia 2</div>
            <img src="img/noticia2.jpg" alt="Imagen de Noticia 2" class="news-image"> <!-- Imagen de la noticia -->
            <div class="news-description">Descripción breve de la noticia 2.</div>
            <div class="news-date">Fecha: 2024-10-18</div>
        </div>
    </div>

    <script>
        // Función para filtrar los eventos según el tipo seleccionado
        function filterEvents() {
            const selectedType = document.getElementById("eventType").value;
            const events = document.querySelectorAll('.event');

            events.forEach(event => {
                // Mostrar todos los eventos si se selecciona "all"
                if (selectedType === "all") {
                    event.style.display = "block";
                } else {
                    // Mostrar solo los eventos que coinciden con el tipo seleccionado
                    if (event.getAttribute("data-type") === selectedType) {
                        event.style.display = "block";
                    } else {
                        event.style.display = "none";
                    }
                }
            });
        }

        // Mostrar todos los eventos al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            filterEvents(); // Llamamos a la función para mostrar todos los eventos inicialmente
        });
    </script>

</body>

</html>

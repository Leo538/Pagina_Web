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
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }

        h2 {
            color: #b22222;
            text-align: center;
            margin-bottom: 20px;
        }

        .event,
        .news {
            margin-bottom: 40px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px;
            text-align: center;
        }

        .event-title,
        .news-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 5px;
        }

        .event-description,
        .news-description {
            font-size: 1em;
            color: #666;
            margin-bottom: 10px;
        }

        .event-date,
        .news-date {
            font-size: 0.9em;
            color: #999;
            margin-bottom: 20px;
        }

        .event-image,
        .news-image {
            width: 100%;
            height: auto;
            max-width: 500px;
            margin-bottom: 20px;
        }

        .select-box {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .select-box label {
            font-size: 1.2em;
            color: #333;
            margin-right: 10px;
        }

        .select-box select {
            padding: 10px;
            font-size: 1em;
            color: #333;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #fff;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            width: 220px;
            appearance: none;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination button {
            padding: 10px;
            margin: 0 5px;
            background-color: #b22222;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .pagination button:disabled {
            background-color: #ccc;
        }

        .pagination button:hover:not(:disabled) {
            background-color: #ff6347;
        }
    </style>
</head>

<body>
    <div class="select-box">
        <label for="eventType">Selecciona un tipo de evento:</label>
        <select id="eventType" onchange="filterEvents()">
            <option value="all">Todos</option>
            <option value="Cultura">Cultura</option>
            <option value="Académico">Académico</option>
            <option value="Deporte">Deporte</option>
        </select>
    </div>

    <!-- Sección de Eventos -->
    <div id="events" class="content-section">
        <h2>Eventos</h2>
        <div id="eventList">
            <div class="event" data-type="Cultura">
                <div class="event-title">Título de Evento 1</div>
                <img src="/Eventos_Noticias/img/evento1.jpg" alt="Imagen del Evento 1" class="event-image">
                <div class="event-description">Descripción breve del evento 1.</div>
                <div class="event-date">Fecha: 2024-11-05 | Tipo: Cultura | Ubicación: Auditorio Principal</div>
            </div>
            <div class="event" data-type="Académico">
                <div class="event-title">Título de Evento 2</div>
                <img src="img/evento2.jpg" alt="Imagen del Evento 2" class="event-image">
                <div class="event-description">Descripción breve del evento 2.</div>
                <div class="event-date">Fecha: 2024-11-10 | Tipo: Académico | Ubicación: Sala de Conferencias</div>
            </div>
        </div>

        <!-- Paginación -->
        <div class="pagination" id="eventPagination">
            <button id="prevPage" onclick="changePage(-1)">Anterior</button>
            <button id="nextPage" onclick="changePage(1)">Siguiente</button>
        </div>
    </div>

    <!-- Sección de Noticias -->
    <div id="news" class="content-section">
        <h2>Últimas Noticias</h2>
        <div class="news">
            <div class="news-title">Título de Noticia 1</div>
            <img src="img/noticia1.jpg" alt="Imagen de Noticia 1" class="news-image">
            <div class="news-description">Descripción breve de la noticia 1.</div>
            <div class="news-date">Fecha: 2024-10-20</div>
        </div>
        <div class="news">
            <div class="news-title">Título de Noticia 2</div>
            <img src="img/noticia2.jpg" alt="Imagen de Noticia 2" class="news-image">
            <div class="news-description">Descripción breve de la noticia 2.</div>
            <div class="news-date">Fecha: 2024-10-18</div>
        </div>

        <!-- Paginación -->
        <div class="pagination" id="newsPagination">
            <button id="prevPageNews" onclick="changePageNews(-1)">Anterior</button>
            <button id="nextPageNews" onclick="changePageNews(1)">Siguiente</button>
        </div>
    </div>

    <script>
        let currentPage = 1;
        const itemsPerPage = 3;
        const events = document.querySelectorAll('.event');
        const news = document.querySelectorAll('.news');

        function displayEvents() {
            const totalPages = Math.ceil(events.length / itemsPerPage);
            events.forEach((event, index) => {
                event.style.display = (index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage) ? "block" : "none";
            });
            document.getElementById("prevPage").disabled = currentPage === 1;
            document.getElementById("nextPage").disabled = currentPage === totalPages;
            document.getElementById("eventPagination").style.display = totalPages > 1 ? 'flex' : 'none';
        }

        function displayNews() {
            const totalPages = Math.ceil(news.length / itemsPerPage);
            news.forEach((article, index) => {
                article.style.display = (index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage) ? "block" : "none";
            });
            document.getElementById("prevPageNews").disabled = currentPage === 1;
            document.getElementById("nextPageNews").disabled = currentPage === totalPages;
            document.getElementById("newsPagination").style.display = totalPages > 1 ? 'flex' : 'none';
        }

        function changePage(offset) {
            currentPage += offset;
            displayEvents();
        }

        function changePageNews(offset) {
            currentPage += offset;
            displayNews();
        }

        document.addEventListener('DOMContentLoaded', function () {
            displayEvents();
            displayNews();
        });
    </script>

</body>

</html>

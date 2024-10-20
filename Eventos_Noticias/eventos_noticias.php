<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos y Noticias</title>
    <link rel="stylesheet" href="/Eventos_Noticias/styleEvents.css"> 
    <link rel="stylesheet" href="../Home/Main/css/estilos.css"> 
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

    <script src="/Eventos_Noticias/scriptsEvents.js"></script> 
</body>

</html>

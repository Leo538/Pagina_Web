<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos y Noticias</title>
    <link rel="stylesheet" href="styleEvents.css"> 
</head>

<body>
    <div class="select-box">
        <label for="partySelect">Selecciona un partido político:</label>
        <select id="partySelect" onchange="filterByParty()">
            <option value="all">Todos</option>
            <option value="Sueña, crea, innova">Sueña, crea, innova</option>
            <option value="Juntos por el cambio">Juntos por el cambio</option>
        </select>
    </div>

    <!-- Sección de Eventos -->
    <div id="events" class="content-section">
        <h2>Eventos</h2>
        <div id="eventList">
            <div class="event" data-party="Sueña, crea, innova">
                <div class="event-title">Evento del Partido 1</div>
                <img src="/Eventos_Noticias/img/evento1.jpg" alt="Imagen del Evento 1" class="event-image">
                <div class="event-description">Descripción breve del evento del Partido 1.</div>
                <div class="event-date">Fecha: 2024-11-05 | Ubicación: Auditorio Principal</div>
                <div class="event-party">Partido: Sueña, crea, innova</div> 
            </div>
            <div class="event" data-party="Juntos por el cambio">
                <div class="event-title">Evento del Partido 2</div>
                <img src="/Eventos_Noticias/img/evento2.jpg" alt="Imagen del Evento 2" class="event-image">
                <div class="event-description">Descripción breve del evento del Partido 2.</div>
                <div class="event-party">Partido: Juntos por el cambio</div>
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
        <div id="newsList">
            <div class="news" data-party="Sueña, crea, innova">
                <div class="news-title">Noticia del Partido 1</div>
                <img src="/Eventos_Noticias/img/noticia1.jpg" alt="Imagen de Noticia 1" class="news-image">
                <div class="news-description">Descripción breve de la noticia del Partido 1.</div>
                <div class="news-date">Fecha: 2024-10-20</div>
                <div class="news-party">Partido: Sueña, crea, innova</div> 
            </div>
            <div class="news" data-party="Juntos por el cambio">
                <div class="news-title">Noticia del Partido 2</div>
                <img src="/Eventos_Noticias/img/noticia2.jpg" alt="Imagen de Noticia 2" class="news-image">
                <div class="news-description">Descripción breve de la noticia del Partido 2.</div>
                <div class="news-date">Fecha: 2024-10-18</div>
                <div class="news-party">Partido: Juntos por el cambio</div>
            </div>
        </div>

        <!-- Paginación -->
        <div class="pagination" id="newsPagination">
            <button id="prevPageNews" onclick="changePageNews(-1)">Anterior</button>
            <button id="nextPageNews" onclick="changePageNews(1)">Siguiente</button>
        </div>
    </div>
     <script src="scriptsEvents.js"></script>

    

</body>

</html>

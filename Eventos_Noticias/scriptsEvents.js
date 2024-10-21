let currentPageEvents = 1;  // Página actual de eventos
let currentPageNews = 1;    // Página actual de noticias
const itemsPerPage = 3;     // Número de elementos por página

let filteredEvents = [];    // Eventos filtrados
let filteredNews = [];      // Noticias filtradas

let events = []; // Todos los eventos
let news = [];   // Todas las noticias

// Función para mostrar los eventos paginados
function displayEvents() {
    const totalPagesEvents = Math.ceil(filteredEvents.length / itemsPerPage);

    filteredEvents.forEach((event, index) => {
        event.style.display = (index >= (currentPageEvents - 1) * itemsPerPage && index < currentPageEvents * itemsPerPage) ? "block" : "none";
    });

    document.getElementById("prevPage").disabled = currentPageEvents === 1;
    document.getElementById("nextPage").disabled = currentPageEvents === totalPagesEvents;
    document.getElementById("eventPagination").style.display = totalPagesEvents > 1 ? 'flex' : 'none';
}

// Función para mostrar las noticias paginadas
function displayNews() {
    const totalPagesNews = Math.ceil(filteredNews.length / itemsPerPage);

    filteredNews.forEach((newsItem, index) => {
        newsItem.style.display = (index >= (currentPageNews - 1) * itemsPerPage && index < currentPageNews * itemsPerPage) ? "block" : "none";
    });

    document.getElementById("prevPageNews").disabled = currentPageNews === 1;
    document.getElementById("nextPageNews").disabled = currentPageNews === totalPagesNews;
    document.getElementById("newsPagination").style.display = totalPagesNews > 1 ? 'flex' : 'none';
}

// Función para filtrar por partido político
function filterByParty() {
    const selectedParty = document.getElementById('partySelect').value;

    // Filtrar eventos por partido
    events.forEach(event => {
        const eventParty = event.getAttribute('data-party');
        // Mostrar u ocultar según el partido seleccionado
        if (selectedParty === 'all' || eventParty === selectedParty) {
            event.style.display = 'block';
        } else {
            event.style.display = 'none';
        }
    });

    // Filtrar noticias por partido
    news.forEach(newsItem => {
        const newsParty = newsItem.getAttribute('data-party');
        // Mostrar u ocultar según el partido seleccionado
        if (selectedParty === 'all' || newsParty === selectedParty) {
            newsItem.style.display = 'block';
        } else {
            newsItem.style.display = 'none';
        }
    });

    // Reiniciar las páginas a 1 cuando cambie el filtro
    currentPageEvents = 1;
    currentPageNews = 1;

    displayEvents();  // Mostrar eventos filtrados y paginados
    displayNews();    // Mostrar noticias filtradas y paginadas
}



// Cambiar página para eventos
function changePage(offset) {
    currentPageEvents += offset;
    displayEvents();
}

// Cambiar página para noticias
function changePageNews(offset) {
    currentPageNews += offset;
    displayNews();
}

// Inicializar la página con todos los eventos y noticias
document.addEventListener('DOMContentLoaded', function () {
    events = [...document.querySelectorAll('.event')]; // Inicializar después de que el DOM esté listo
    news = [...document.querySelectorAll('.news')];    // Inicializar después de que el DOM esté listo
    filterByParty();  // Mostrar todos los eventos y noticias al cargar
});

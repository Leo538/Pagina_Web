let currentPageEvents = 1;  // Página actual de eventos
let currentPageNews = 1;    // Página actual de noticias
const itemsPerPage = 3;     // Número de elementos por página

let filteredEvents = [];    // Eventos filtrados
let filteredNews = [];      // Noticias filtradas

const events = [...document.querySelectorAll('.event')]; // Todos los eventos
const news = [...document.querySelectorAll('.news')];    // Todas las noticias

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
    filteredEvents = events.filter(event => {
        const eventParty = event.getAttribute('data-party');
        return selectedParty === 'all' || eventParty === selectedParty;
    });
    
    // Filtrar noticias por partido
    filteredNews = news.filter(newsItem => {
        const newsParty = newsItem.getAttribute('data-party');
        return selectedParty === 'all' || newsParty === selectedParty;
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
    filterByParty();  // Mostrar todos los eventos y noticias al cargar
});

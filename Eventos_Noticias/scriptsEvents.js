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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidatos a Rector</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Estilos.css"> 

</head>
<body>
<header>
    <div class="logo">
        <img src="logo.png" alt="UTA Logo"> 
        <h1>Proceso de Elecciones UTA 2024</h1>
    </div>
    <nav>
        <a href="#"><i class="fas fa-home"></i> Inicio</a>

        <a href="#candidatos"><i class="fas fa-user"></i> Candidatos</a>
        <a href="#propuestas"><i class="fas fa-bullhorn"></i> Propuestas</a>
        <a href="#eventos"><i class="fas fa-calendar-alt"></i> Eventos y Noticias</a>
        <a href="#sugerencias"><i class="fas fa-comment-dots"></i> Sugerencias</a>
    </nav>
</header>

<section class="slider">
    <div class="fade"></div>
    <div class="slides">
        <div class="slide slide1 active">
            <div class="content">
                <h1>Candidatos</h1>
                <p>Ingrese Información del candidato.</p>
                <a href="#" class="btn">Más Información</a>
            </div>
            <img src="fo1.jpg" alt="Candidate Image">
        </div>
        <div class="slide slide2">
            <div class="content">
                <h1>Propuestas</h1>
                <p>Ingrese Información del candidato.</p>
                <a href="#" class="btn">Más Información</a>
            </div>
            <img src="mari2.jpg" alt="Candidate Image">
        </div>
        <div class="slide slide2">
            <div class="content">
                <h1>Eventos y Noticias</h1>
                <p>Ingrese Información del candidato.</p>
                <a href="#" class="btn">Más Información</a>
            </div>
            <img src="fo2.jpg" alt="Candidate Image">
        </div>
        <div class="slide slide2">
            <div class="content">
                <h1>Sugerencias</h1>
                <p>Ingrese Información del candidato.</p>
                <a href="#" class="btn">Más Información</a>
            </div>
            <img src="mari.jpg" alt="Candidate Image">
        </div>  
    </div>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</section>
<section id="candidatos">
    <div class="candidatos-container">
        <div class="candidatos-text">
            <h1>Conoce a nuestros candidatos</h1>
            <a href="#" class="btn">Ver más información de los clientes</a>
        </div>
    </div>
</section>


<style>
    .candidato-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
</style>


<section id="propuestas">
    <h1>Propuestas</h1>
    <p>Puedes ver nuestras propuestas a continuación.</p>

    <div class="background">
        <div class="text">
            Tú <br> Nueva manera. <br> Nuevo comienzo.
           <p> <a href="#url_destino" class="button-link">Conoce más sobre las propuestas</a></p>
        </div>
    </div>
</section>



<section class="eventos-container">
    <h2>Eventos y Noticias</h2>
    <div class="eventos-grid">
        <div class="evento-card">
            <img src="anuncio.jpg" alt="Evento 1">
            <div class="evento-info">
                <h3>Conferencia sobre Tecnología</h3>
                <p>Únete a nuestra conferencia anual donde discutiremos los avances más recientes en tecnología y software.</p>
            </div>
            <div class="overlay">
                <a href="pagina_evento1.html">Más información</a> <!-- Cambia la URL según sea necesario -->
            </div>
        </div>
        <div class="evento-card">
            <img src="anuncio2.jpg" alt="Evento 2">
            <div class="evento-info">
                <h3>Hackathon 2024</h3>
                <p>Participa en nuestro hackathon y demuestra tus habilidades de programación en un ambiente competitivo y colaborativo.</p>
            </div>
            <div class="overlay">
                <a href="pagina_evento2.html">Más información</a> <!-- Cambia la URL según sea necesario -->
            </div>
        </div>
        <div class="evento-card">
            <img src="anuncio2.jpg" alt="Evento 2">
            <div class="evento-info">
                <h3>Hackathon 2024</h3>
                <p>Participa en nuestro hackathon y demuestra tus habilidades de programación en un ambiente competitivo y colaborativo.</p>
            </div>
            <div class="overlay">
                <a href="pagina_evento2.html">Más información</a> <!-- Cambia la URL según sea necesario -->
            </div>
        </div>
        <div class="evento-card">
            <img src="anuncio2.jpg" alt="Evento 2">
            <div class="evento-info">
                <h3>Hackathon 2024</h3>
                <p>Participa en nuestro hackathon y demuestra tus habilidades de programación en un ambiente competitivo y colaborativo.</p>
            </div>
            <div class="overlay">
                <a href="pagina_evento2.html">Más información</a> <!-- Cambia la URL según sea necesario -->
            </div>
        </div>
    </div>
</section>

<section id="sugerencias">
    <h1 class="sugerencias-title">Sugerencias</h1>
    <div class="sugerencias-container">
        <div class="sugerencia-card">
            <div class="sugerencia-content">
                <h2 class="sugerencia-subtitle">Eventos y Conciertos</h2>
                <p class="sugerencia-highlight">COMPRA Y VENDE ENTRADAS</p>
                <p class="sugerencia-description">Con entradas para conciertos para las principales giras, festivales y más, Vivid Seats es su recurso integral para eventos de conciertos en vivo. Encuentre mapas detallados de asientos y conciertos...</p>
                <a href="" class="sugerencia-button">
                    <button>ver más</button>
                </a>
            </div>
            <div class="sugerencia-image-container">
                <img src="anuncio.jpg" alt="Concierto" class="sugerencia-image">
            </div>
        </div>
    </div>
</section>

<script src="Scripts.js"></script> <!-- Enlace al archivo JavaScript -->


<footer class="footer-rights">
    <p>Todos los derechos reservados Team Sangre © 2024</p>
</footer>

</body>
</html>

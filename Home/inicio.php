<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidatos a Rector</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff; 
            color: #333;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #b22222;
        }

        header .logo {
            display: flex;
            align-items: center; 
        }

        header .logo img {
            width: 50px; 
            margin-right: 10px;
        }

        header .logo h1 {
            color: #ffffff;
            font-size: 1.5em;
        }

        header nav {
            display: flex;
            align-items: center;
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1em;
            transition: color 0.3s;
            display: flex;
            align-items: center;
        }

        header nav a i {
            margin-right: 8px;
        }

        header nav a:hover {
            color: #2f2929; 
        }

        .slider {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 88.9vh; 
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }

        .slider .slides {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slider .slide {
            min-width: 100%;
            height: 100vh; 
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10%;
            position: absolute; 
            top: 0;
            left: 0;
            opacity: 0; 
            transition: opacity 0.5s ease; 
        }

        .slider .slide.active {
            opacity: 1; 
        }

        .slide1 {
            background: linear-gradient(to right, #000000, #000000); 
        }

        .slide2 {
            background: url('Img/skt.png') no-repeat center center/cover; 
        }

        .slider .slide img {
            max-height: 60%; 
            max-width: 60%;  
            object-fit: cover; 
            border-radius: 15px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1); 
            border: 2px solid #fff; 
        }

        .slider .content {
            color: #ffffff; 
            text-align: left;
        }

        .slider .content h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .slider .content p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .slider .content .btn {
            background-color: #b22222; 
            padding: 15px 30px;
            color: #ffffff; 
            text-transform: uppercase;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
            border-radius: 5px;
            text-decoration: none;
        }

        .slider .content .btn:hover {
            background-color: #ffcccb; 
        }

        .slider .prev, .slider .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2em;
            color: #ff0000; 
            cursor: pointer;
            background: none;
            border: none;
            z-index: 2; 
        }

        .slider .prev {
            left: 20px;
        }

        .slider .next {
            right: 20px;
        }

        /* Nueva sección */
        .suggestions-section {
            height: 100vh; /* Ocupa toda la pantalla */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0; /* Color de fondo de la sección */
            padding: 20px;
            text-align: center;
        }

        .suggestions-section h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #b22222; /* Color del texto */
        }

        .suggestions-section p {
            font-size: 1.5em;
            margin-bottom: 30px;
        }

        .suggestions-section .suggestions-box {
            width: 80%;
            max-width: 600px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .footer-rights {
            background-color: #b22222; 
            color: white; 
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 0px; 
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <img src="Img/logo.png" alt="UTA Logo"> 
        <h1>Proceso de Elecciones UTA 2024</h1>
    </div>
    <nav>
        <a href="#"><i class="fas fa-home"></i> Inicio</a>
        <a href="#"><i class="fas fa-user"></i> Candidatos</a>
        <a href="#"><i class="fas fa-bullhorn"></i> Propuestas</a>
        <a href="#"><i class="fas fa-calendar-alt"></i> Eventos y Noticias</a>
        <a href="#"><i class="fas fa-comment-dots"></i> Sugerencias</a>
    </nav>
</header>
<section class="slider">
    <div class="fade"></div>
    <div class="slides">
        <div class="slide slide1 active">
            <div class="content">
                <h1>Candidato 1</h1>
                <p>Ingrese Información del candidato.</p>
                <a href="#" class="btn">Más Información</a>
            </div>
            <img src="Img/perfil.jpg" alt="Candidate Image">
        </div>
        <div class="slide slide2">
            <div class="content">
                <h1>Candidato 2</h1>
                <p>Ingrese Información del candidato.</p>
                <a href="#" class="btn">Más Información</a>
            </div>
            <img src="Img/MASCOTAUTAPropuesta.jpg" alt="Candidate Image">
        </div>
    </div>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</section>

<script>
    // Código para manejar el scroll y ocultar/mostrar el header
    let lastScrollTop = 0;
    const header = document.querySelector('header');

    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > lastScrollTop) {
            // Al bajar
            header.style.top = '-100px'; // Cambia este valor si el header tiene diferente altura
        } else {
            // Al subir
            header.style.top = '0';
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Para evitar que el valor se vuelva negativo
    });

    // Código para el slider
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    const fadeEffect = document.querySelector('.fade');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });

        fadeEffect.style.opacity = '0'; // Desvanecer
        setTimeout(() => {
            fadeEffect.style.opacity = '1'; // Volver a mostrar
        }, 500);
    }

    document.querySelector('.next').addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    });

    document.querySelector('.prev').addEventListener('click', () => {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    });

    // Cambio automático de slide cada 5 segundos
    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }, 5000);
</script>

<div class="footer-rights">
    <p>&copy; 2024 Todos los derechos reservados.</p>
</div>
</body>
</html>

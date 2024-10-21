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
        
                .main-section {
                    padding: 50px;
                    text-align: center;
                    background-color: #b22222; 
                    color: white;
                }
        
                .main-section h1 {
                    font-size: 3em;
                    margin-bottom: 20px;
                }
        
                .main-section p {
                    font-size: 1.2em;
                    margin-bottom: 20px;
                }
        
                .main-section .info-box {
                    display: flex;
                    justify-content: space-around;
                    margin-top: 50px;
                }
        
                .info-box .info-item {
                    text-align: center;
                    padding: 20px;
                    width: 30%;
                }
        
                .info-item img {
                    width: 100px; 
                    margin-bottom: 20px;
                }
        
                .info-item h3 {
                    font-size: 1.5em;
                    margin-bottom: 10px;
                }
        
                footer {
                    text-align: center;
                    padding: 20px;
                    background-color: #b22222; 
                    color: white;
                    margin-top: 50px;
                }
        
                .fade {
                    background-color: b22222; 
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    opacity: 0;
                    transition: opacity 0.5s ease;
                    z-index: 1; 
                }
        
                .fade.active {
                    opacity: 1; 
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
                <img src="Img\logo.png" alt="UTA Logo"> 
                <h1>Proceso de Elecciones UTA 2024</h1>
            </div>
            <nav>
                <a href="../Home/inicio.php"><i class="fas fa-home"></i> Inicio</a>
                <a href="#"><i class="fas fa-user"></i> Candidatos</a>
                <a href="#"><i class="fas fa-bullhorn"></i> Propuestas</a>
                <a href='../Eventos_Noticias/eventos_noticias.php'><i class="fas fa-calendar-alt"></i> Eventos y Noticias</a>
                <a href="#"><i class="fas fa-comment-dots"></i> Sugerencias</a>
            </nav>
        </header>
        <div class="slider">
            <div class="fade"></div>
            <div class="slides">
                <div class="slide slide1 active">
                    <div class="content">
                        <h1>Candidato1</h1>
                        <p> Ingrese Información del candidato.</p>
                        <a href="#" class="btn">Más Información</a>
                    </div>
                    <img src="Img\perfil.jpg" alt="Candidate Image">
                </div>
                <div class="slide slide2">
                    <div class="content">
                        <h1>Candidato 2</h1>
                        <p> Ingrese Información del candidato.</p>
                        <a href="#" class="btn">Más Información</a>
                    </div>
                    <img src="Img\MASCOTAUTAPropuesta.jpg" alt="Candidate Image">
                </div>
            </div>
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
        <script>
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
        
                fadeEffect.classList.add('active');
                setTimeout(() => {
                    fadeEffect.classList.remove('active');
                }, 300);
            }
        
            document.querySelector('.next').addEventListener('click', () => {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            });
        
            document.querySelector('.prev').addEventListener('click', () => {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            });
        
            showSlide(currentSlide);
        </script>
        <div class="footer-rights">
            Derechos reservados UTA 2024
        </div>
        
        

    </body>
    </html>



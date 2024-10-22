<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidatos</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="../Home/Img/logo.png" alt="UTA Logo"> <!-- Cambié la ruta para que sea relativa -->
            <h1>Proceso de Elecciones UTA 2024</h1>
        </div>
        <nav>
        <a href="../Home/inicio.php"><i class="fas fa-home"></i> Inicio</a>
            <a href="../Candidatos/candidatos.php"><i class="fas fa-user"></i> Candidatos</a>
            <a href="../Propuestas/Propuestas.php"><i class="fas fa-bullhorn"></i> Propuestas</a>
            <a href="../Eventos_Noticias/eventos_noticias.php"><i class="fas fa-calendar-alt"></i> Eventos y
                Noticias</a>
            <a href="#"><i class="fas fa-comment-dots"></i> Sugerencias</a>
        </nav>
    </header>

<body>
<h2>#Juntos por la UTA</h2>
<section id="candidates-section-1" class="candidates-section">
    <div class="card">
        <img src="./Img/Mary_cruz.png" alt="Rectora">
        <h3>Rectora</h3>
        <p>Descripción breve del candidato 1.</p>
        <a href="#" class="open-modal" data-id="1" data-modal="modal1">Ver más</a>
    </div>

    <div class="card">
        <img src="candidate2.jpg" alt="Candidato 2">
        <h3>Candidato 2</h3>
        <p>Descripción breve del candidato 2.</p>
        <a href="#" class="open-modal" data-id="2" data-modal="modal2">Ver más</a>
    </div>

    <div class="card">
        <img src="candidate3.jpg" alt="Candidato 3">
        <h3>Candidato 3</h3>
        <p>Descripción breve del candidato 3.</p>
        <a href="#" class="open-modal" data-id="3" data-modal="modal3">Ver más</a>
    </div>

    <div class="card">
        <img src="candidate4.jpg" alt="Candidato 4">
        <h3>Candidato 4</h3>
        <p>Descripción breve del candidato 4.</p>
        <a href="#" class="open-modal" data-id="4" data-modal="modal4">Ver más</a>
    </div>
</section>

<!-- Modal para candidato 1 -->
<div id="modal1" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="candidate-img-1" src="" alt="Candidato">
        <h3 id="candidate-name-1"></h3>
        <p id="candidate-bio-1"></p>
        <p id="candidate-experience-1"></p>
        <p id="candidate-vision-1"></p>
        <p id="candidate-achievements-1"></p>
    </div>
</div>

<!-- Modal para candidato 2 -->
<div id="modal2" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="candidate-img-2" src="" alt="Candidato">
        <h3 id="candidate-name-2"></h3>
        <p id="candidate-bio-2"></p>
        <p id="candidate-experience-2"></p>
        <p id="candidate-vision-2"></p>
        <p id="candidate-achievements-2"></p>
    </div>
</div>

<!-- Modal para candidato 3 -->
<div id="modal3" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="candidate-img-3" src="" alt="Candidato">
        <h3 id="candidate-name-3"></h3>
        <p id="candidate-bio-3"></p>
        <p id="candidate-experience-3"></p>
        <p id="candidate-vision-3"></p>
        <p id="candidate-achievements-3"></p>
    </div>
</div>

<!-- Modal para candidato 4 -->
<div id="modal4" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="candidate-img-4" src="" alt="Candidato">
        <h3 id="candidate-name-4"></h3>
        <p id="candidate-bio-4"></p>
        <p id="candidate-experience-4"></p>
        <p id="candidate-vision-4"></p>
        <p id="candidate-achievements-4"></p>
    </div>
</div>

<!-- Nuevos candidatos de otro partido -->

<h2>#Otro Partido Político</h2>
<section id="candidates-section-2" class="candidates-section">
    <div class="card">
        <img src="./Img/Sara_Camacho.png" alt="Candidato 5">
        <h3>Candidato 5</h3>
        <p>Descripción breve del candidato 5.</p>
        <a href="#" class="open-modal" data-id="5" data-modal="modal5">Ver más</a>
    </div>

    <div class="card">
        <img src="candidate6.jpg" alt="Candidato 6">
        <h3>Candidato 6</h3>
        <p>Descripción breve del candidato 6.</p>
        <a href="#" class="open-modal" data-id="6" data-modal="modal6">Ver más</a>
    </div>

    <div class="card">
        <img src="candidate7.jpg" alt="Candidato 7">
        <h3>Candidato 7</h3>
        <p>Descripción breve del candidato 7.</p>
        <a href="#" class="open-modal" data-id="7" data-modal="modal7">Ver más</a>
    </div>

    <div class="card">
        <img src="candidate8.jpg" alt="Candidato 8">
        <h3>Candidato 8</h3>
        <p>Descripción breve del candidato 8.</p>
        <a href="#" class="open-modal" data-id="8" data-modal="modal8">Ver más</a>
    </div>
</section>

<!-- Modal para candidato 5 -->
<div id="modal5" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="candidate-img-5" src="" alt="Candidato">
        <h3 id="candidate-name-5"></h3>
        <p id="candidate-bio-5"></p>
        <p id="candidate-experience-5"></p>
        <p id="candidate-vision-5"></p>
        <p id="candidate-achievements-5"></p>
    </div>
</div>

<!-- Modal para candidato 6 -->
<div id="modal6" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="candidate-img-6" src="" alt="Candidato">
        <h3 id="candidate-name-6"></h3>
        <p id="candidate-bio-6"></p>
        <p id="candidate-experience-6"></p>
        <p id="candidate-vision-6"></p>
        <p id="candidate-achievements-6"></p>
    </div>
</div>

<!-- Modal para candidato 7 -->
<div id="modal7" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="candidate-img-7" src="" alt="Candidato">
        <h3 id="candidate-name-7"></h3>
        <p id="candidate-bio-7"></p>
        <p id="candidate-experience-7"></p>
        <p id="candidate-vision-7"></p>
        <p id="candidate-achievements-7"></p>
    </div>
</div>

<!-- Modal para candidato 8 -->
<div id="modal8" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="candidate-img-8" src="" alt="Candidato">
        <h3 id="candidate-name-8"></h3>
        <p id="candidate-bio-8"></p>
        <p id="candidate-experience-8"></p>
        <p id="candidate-vision-8"></p>
        <p id="candidate-achievements-8"></p>
    </div>
</div>


    <script src="candidatos.js"></script>

 
</section>
    <!-- Footer ajustado -->
     
    </script>
        <div class="footer-rights">
            Derechos reservados UTA 2024
        </div>
   

</body>
</html>

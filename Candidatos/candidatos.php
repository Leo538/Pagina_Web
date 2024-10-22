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
            <img src="/Pagina_Web/Main/Img/logo.png" alt="UTA Logo"> <!-- Cambié la ruta para que sea relativa -->
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
<h2>#Juntos por la UTA</h2>
<body>


    <!-- Título del partido político -->
    
    
    <!-- Sección de los candidatos -->
    <section id="candidates-section-1" class="candidates-section">
    <div class="card">
        <img src="./Img/Mary_cruz.png" alt="Rectora">
        <h3>Rectora</h3>
        <p>Descripción breve del candidato 1.</p>
        <a href="#" class="open-modal" data-candidate="1">Ver más</a>
    </div>
    <div class="card">
        <img src="candidate2.jpg" alt="Candidato 2">
        <h3>Candidato 2</h3>
        <p>Descripción breve del candidato 2.</p>
        <a href="" class="open-modal" data-candidate="2">Ver más</a>
    </div>
    <div class="card">
        <img src="candidate3.jpg" alt="Candidato 3">
        <h3>Candidato 3</h3>
        <p>Descripción breve del candidato 3.</p>
        <a href="#" class="open-modal" data-candidate="3">Ver más</a>
    </div>
    <div class="card">
        <img src="candidate4.jpg" alt="Candidato 4">
        <h3>Candidato 4</h3>
        <p>Descripción breve del candidato 4.</p>
        <a href="#" class="open-modal" data-candidate="4">Ver más</a>
    </div>


<!-- Modal Structure -->
<div id="candidateModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="candidate-img" src="" alt="Candidato">
        <h3 id="candidate-name"></h3>
        <p id="candidate-bio"></p>
        <p id="candidate-achievements"></p>
    </div>
</div>
</section>

<section id="candidates-section-2" class="candidates-section">
    <div class="card">
        <img src="" alt="Rectora">
        <h3>Rectora</h3>
        <p>Descripción breve del candidato 1.</p>
        <a href="#" class="open-modal" data-candidate="1">Ver más</a>
    </div>
    <div class="card">
        <img src="candidate2.jpg" alt="Candidato 2">
        <h3>Candidato 2</h3>
        <p>Descripción breve del candidato 2.</p>
        <a href="" class="open-modal" data-candidate="2">Ver más</a>
    </div>
    <div class="card">
        <img src="candidate3.jpg" alt="Candidato 3">
        <h3>Candidato 3</h3>
        <p>Descripción breve del candidato 3.</p>
        <a href="#" class="open-modal" data-candidate="3">Ver más</a>
    </div>
    <div class="card">
        <img src="candidate4.jpg" alt="Candidato 4">
        <h3>Candidato 4</h3>
        <p>Descripción breve del candidato 4.</p>
        <a href="#" class="open-modal" data-candidate="4">Ver más</a>
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

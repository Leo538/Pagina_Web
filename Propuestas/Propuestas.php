<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propuestas</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        body {
            display: flex;
            flex-direction: column;
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
            color: #f0f0f0;
        }

        .container {
            flex-grow: 1;
            padding: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
            color: #333;
        }

        .filter-box {
            text-align: center;
            margin-bottom: 40px;
        }

        .filter-box select {
            padding: 10px 15px;
            font-size: 1em;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
        }

        .proposals-grid {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .proposal-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(50% - 10px);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .proposal-card:hover {
            transform: scale(1.05);
        }

        .proposal-card h3 {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: #b22222;
            text-align: center;
        }

        .proposal-card p {
            font-size: 1em;
            color: #666;
            text-align: justify;
        }

        footer {
            background-color: #b22222;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="C:\xamp2\htdocs\Pagina_Web\Pagina_Web\Main\Img\logo.png" alt="UTA Logo">
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

    <div class="container">
        <h2>Propuestas de los Candidatos</h2>

        <div class="filter-box">
            <label for="faculty">Filtrar por Facultad o Interés:</label>
            <select id="faculty" onchange="filterProposals()">
                <option value="all">Mostrar Todas</option>
                <option value="Facultad de Ciencias Administrativas">Facultad de Ciencias Administrativas</option>
                <option value="Facultad de Ciencias de la Salud">Facultad de Ciencias de la Salud</option>
                <option value="Facultad de Ciencias Humanas y de la Educación">Facultad de Ciencias Humanas y de la Educación</option>
                <option value="Facultad de Ciencias Agropecuarias">Facultad de Ciencias Agropecuarias</option>
                <option value="Facultad de Ciencias de la Ingeniería y Aplicadas">Facultad de Ciencias de la Ingeniería y Aplicadas</option>
                <option value="Facultad de Jurisprudencia y Ciencias Sociales">Facultad de Jurisprudencia y Ciencias Sociales</option>
                <option value="Facultad de Diseño, Arquitectura y Artes">Facultad de Diseño, Arquitectura y Artes</option>
                <option value="Facultad de Contabilidad y Auditoría">Facultad de Contabilidad y Auditoría</option>
                <option value="infraestructura">Infraestructura</option>
                <option value="deportes">Deportes</option>
                <option value="cultura">Cultura</option>
                <option value="investigación">Investigación</option>
                <option value="vinculación">Vinculación con la Sociedad</option>
            </select>
        </div>

        <div class="proposals-grid" id="proposalsGrid">
            <!-- Propuesta Candidato 1 -->
            <div class="proposal-card" data-category="Facultad de Ciencias Administrativas">
                <h3>Propuesta Candidato 1</h3>
                <p>Propuesta sobre infraestructura de la Facultad de Ciencias Administrativas.</p>
            </div>

            <!-- Propuesta Candidato 2 -->
            <div class="proposal-card" data-category="Facultad de Ciencias de la Salud">
                <h3>Propuesta Candidato 2</h3>
                <p>Propuesta sobre mejora en deportes para la Facultad de Ciencias de la Salud.</p>
            </div>

        </div>
    </div>

    <footer>
        Derechos reservados UTA 2024
    </footer>

    <script>
        function filterProposals() {
            var selectedFaculty = document.getElementById("faculty").value;
            var proposals = document.querySelectorAll(".proposal-card");

            proposals.forEach(function(proposal) {
                if (selectedFaculty === "all" || proposal.getAttribute("data-category") === selectedFaculty) {
                    proposal.style.display = "block";
                } else {
                    proposal.style.display = "none";
                }
            });
        }
    </script>
</body>
</html>
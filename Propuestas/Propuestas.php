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
            min-height: 200px;
        }

        .proposal-card:hover {
            transform: scale(1.05);
        }

        .proposal-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #b22222;
            text-align: center;
        }

        .proposal-card .proposal-title {
            font-size: 1.2em;
            font-weight: bold;
            color: #444;
            margin-bottom: 8px;
            text-align: center;
        }

        .proposal-card .proposal-description {
            font-size: 1em;
            color: #666;
            text-align: justify;
            margin-bottom: 15px;
        }

        .proposal-card p {
            font-size: 0.95em;
            color: #666;
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
            <div class="proposal-card" id="proposalCandidato1">
                <h3>Propuesta Candidato 1</h3>
                <div class="proposal-title">Propuesta sobre infraestructura de la Facultad de Ciencias Administrativas</div>
                <div class="proposal-description">Esta propuesta busca mejorar la infraestructura de la facultad, con un enfoque en la construcción de nuevos laboratorios, aulas equipadas con tecnología de punta, y mejoras en las áreas de estudio para los estudiantes.</div>
            </div>

            <!-- Propuesta Candidato 2 -->
            <div class="proposal-card" id="proposalCandidato2">
                <h3>Propuesta Candidato 2</h3>
                <div class="proposal-title">Propuesta sobre mejora en deportes para la Facultad de Ciencias de la Salud</div>
                <div class="proposal-description">El candidato 2 propone una mejora en las instalaciones deportivas de la facultad, con el fin de fomentar la actividad física entre los estudiantes y mejorar los programas de deportes ya existentes, promoviendo el bienestar de la comunidad universitaria.</div>
            </div>
        </div>
    </div>

    <footer>
        Derechos reservados UTA 2024
    </footer>

    <script>
        const propuestas = {
            "Facultad de Ciencias Administrativas": {
                candidato1: {
                    title: "Propuesta sobre infraestructura de la Facultad de Ciencias Administrativas",
                    description: "Esta propuesta busca mejorar la infraestructura de la facultad, con un enfoque en la construcción de nuevos laboratorios, aulas equipadas con tecnología de punta, y mejoras en las áreas de estudio para los estudiantes."
                },
                candidato2: {
                    title: "No hay propuestas disponibles para este tema.",
                    description: ""
                }
            },
            "Facultad de Ciencias de la Salud": {
                candidato1: {
                    title: "No hay propuestas disponibles para este tema.",
                    description: ""
                },
                candidato2: {
                    title: "Propuesta sobre mejora en deportes para la Facultad de Ciencias de la Salud",
                    description: "El candidato 2 propone una mejora en las instalaciones deportivas de la facultad, con el fin de fomentar la actividad física entre los estudiantes y mejorar los programas de deportes ya existentes, promoviendo el bienestar de la comunidad universitaria."
                }
            },
            "default": {
                candidato1: {
                    title: "No hay propuestas disponibles para este tema.",
                    description: ""
                },
                candidato2: {
                    title: "No hay propuestas disponibles para este tema.",
                    description: ""
                }
            }
        };

        function filterProposals() {
            var selectedFaculty = document.getElementById("faculty").value;
            var proposalCandidato1Title = document.getElementById("proposalCandidato1").querySelector(".proposal-title");
            var proposalCandidato1Desc = document.getElementById("proposalCandidato1").querySelector(".proposal-description");
            var proposalCandidato2Title = document.getElementById("proposalCandidato2").querySelector(".proposal-title");
            var proposalCandidato2Desc = document.getElementById("proposalCandidato2").querySelector(".proposal-description");

            if (propuestas[selectedFaculty]) {
                proposalCandidato1Title.textContent = propuestas[selectedFaculty].candidato1.title;
                proposalCandidato1Desc.textContent = propuestas[selectedFaculty].candidato1.description;
                proposalCandidato2Title.textContent = propuestas[selectedFaculty].candidato2.title;
                proposalCandidato2Desc.textContent = propuestas[selectedFaculty].candidato2.description;
            } else {
                proposalCandidato1Title.textContent = propuestas["default"].candidato1.title;
                proposalCandidato1Desc.textContent = propuestas["default"].candidato1.description;
                proposalCandidato2Title.textContent = propuestas["default"].candidato2.title;
                proposalCandidato2Desc.textContent = propuestas["default"].candidato2.description;
            }
        }
    </script>
</body>
</html>
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
                <div class="proposal-title" id="candidato1Title"></div>
                <div class="proposal-description" id="candidato1Description"></div>
            </div>

            <!-- Propuesta Candidato 2 -->
            <div class="proposal-card" id="proposalCandidato2">
                <h3>Propuesta Candidato 2</h3>
                <div class="proposal-title" id="candidato2Title"></div>
                <div class="proposal-description" id="candidato2Description"></div>
            </div>
        </div>
    </div>

    <footer>
        Derechos reservados UTA 2024
    </footer>

    <script>
        const propuestas = {
            "Facultad de Ciencias de la Salud": {
                candidato1: [
                    "Propuesta 1: Mejora de Laboratorios - Renovación de los laboratorios de prácticas médicas para los estudiantes.",
                    "Propuesta 2: Aulas Modernas - Equipar aulas con simuladores médicos avanzados para una enseñanza más interactiva.",
                    "Propuesta 3: Programas de Intercambio - Implementar programas de intercambio con universidades internacionales en el área de salud.",
                    "Propuesta 4: Formación Continua - Establecer cursos de formación continua para el personal médico de la facultad.",
                    "Propuesta 5: Clínicas Universitarias - Reforma de las clínicas universitarias para brindar servicios de calidad a la comunidad.",
                    "Propuesta 6: Investigación Médica - Fomentar la investigación en medicina y ciencias de la salud a través de subvenciones.",
                    "Propuesta 7: Bienestar Estudiantil - Crear programas de salud mental y bienestar para los estudiantes de la facultad.",
                    "Propuesta 8: Colaboraciones con Hospitales - Ampliar la colaboración con hospitales regionales para más oportunidades de práctica.",
                    "Propuesta 9: Mejora de Infraestructuras - Construir un nuevo edificio de laboratorios equipado con tecnología de punta.",
                    "Propuesta 10: Acceso a Biblioteca Digital - Acceso ilimitado a bibliotecas digitales especializadas en ciencias médicas."
                ],
                candidato2: [
                    "Propuesta 1: Deportes para la Salud - Crear más espacios deportivos específicos para los estudiantes de salud.",
                    "Propuesta 2: Clínicas Móviles - Establecer clínicas móviles para que los estudiantes puedan hacer prácticas en comunidades rurales.",
                    "Propuesta 3: Biblioteca Especializada - Modernización de la biblioteca de la facultad con recursos especializados.",
                    "Propuesta 4: Programa de Becas - Crear un programa de becas para estudiantes destacados en ciencias de la salud.",
                    "Propuesta 5: Centros de Simulación - Construir centros de simulación avanzada para la práctica médica.",
                    "Propuesta 6: Prevención de Enfermedades - Programas de prevención de enfermedades en las áreas de medicina preventiva.",
                    "Propuesta 7: Movilidad Estudiantil - Facilitar la movilidad internacional para estudiantes de medicina.",
                    "Propuesta 8: Capacitación Docente - Capacitación continua de los docentes en nuevas tecnologías médicas.",
                    "Propuesta 9: Medicina Rural - Fomentar programas de salud y medicina rural a través de la facultad.",
                    "Propuesta 10: Servicio Comunitario - Iniciar programas de servicio comunitario para los estudiantes de salud."
                ]
            },
            "default": {
                candidato1: ["No hay propuestas disponibles para este tema."],
                candidato2: ["No hay propuestas disponibles para este tema."]
            }
        };

        function filterProposals() {
            var selectedFaculty = document.getElementById("faculty").value;
            var candidato1Title = document.getElementById("candidato1Title");
            var candidato1Description = document.getElementById("candidato1Description");
            var candidato2Title = document.getElementById("candidato2Title");
            var candidato2Description = document.getElementById("candidato2Description");

            const candidato1Propuestas = propuestas[selectedFaculty]?.candidato1 || propuestas["default"].candidato1;
            const candidato2Propuestas = propuestas[selectedFaculty]?.candidato2 || propuestas["default"].candidato2;

            candidato1Title.innerHTML = "";
            candidato1Description.innerHTML = "";
            candidato2Title.innerHTML = "";
            candidato2Description.innerHTML = "";

            // Mostrar propuestas para Candidato 1 en el mismo cuadro
            candidato1Propuestas.forEach((propuesta, index) => {
                candidato1Title.innerHTML += `<p><b>Propuesta ${index + 1}:</b> ${propuesta}</p>`;
            });

            // Mostrar propuestas para Candidato 2 en el mismo cuadro
            candidato2Propuestas.forEach((propuesta, index) => {
                candidato2Title.innerHTML += `<p><b>Propuesta ${index + 1}:</b> ${propuesta}</p>`;
            });
        }

        // Inicializar mostrando todas las propuestas
        filterProposals();
    </script>
</body>
</html>

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

        html,
        body {
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
            font-size: 2.2em;
            color: #333;
            letter-spacing: 1px;
        }

        .filter-box {
            text-align: center;
            margin-bottom: 40px;
        }

        .filter-box select {
            padding: 10px 15px;
            font-size: 1em;
            border-radius: 8px;
            border: 1px solid #ccc;
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .filter-box select:hover {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
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
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: calc(50% - 10px);
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 250px;
            border-left: 6px solid #b22222;
        }

        .proposal-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        .proposal-card h3 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #b22222;
            text-align: center;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }

        .proposal-card .proposal-title {
            font-size: 1.3em;
            font-weight: bold;
            color: #444;
            margin-bottom: 8px;
            text-align: left;
        }

        .proposal-card .proposal-description {
            font-size: 1.1em;
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

        .proposal-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 1.1em;
            background-color: #fafafa;
            border-radius: 8px;
            padding: 12px 15px;
        }

        .proposal-item:last-child {
            border-bottom: none;
        }

        .proposal-item {
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .proposal-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="../Home/Img/logo.png" alt="UTA Logo">
            <h1>Proceso de Elecciones UTA 2024</h1>
        </div>
        <nav>
            <a href="../Home/inicio.php"><i class="fas fa-home"></i> Inicio</a>
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
                <option value="Ciencias Administrativas">Ciencias Administrativas</option>
                <option value="Ciencia e Ingeniería en Alimentos">Ciencia e Ingeniería en Alimentos</option>
                <option value="Jurisprudencia y Ciencias Sociales">Jurisprudencia y Ciencias Sociales</option>
                <option value="Contabilidad y Auditoría">Contabilidad y Auditoría</option>
                <option value="Ciencias Humanas y de la Educación">Ciencias Humanas y de la Educación</option>
                <option value="Ciencias de la Salud">Ciencias de la Salud</option>
                <option value="Ingeniería Civil y Mecánica">Ingeniería Civil y Mecánica</option>
                <option value="Ingeniería en Sistemas, Electrónica e Industrial">Ingeniería en Sistemas, Electrónica e
                    Industrial</option>
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
                <h3>Zara Camacho</h3>
                <div id="candidato1Description"></div>
            </div>

            <!-- Propuesta Candidato 2 -->
            <div class="proposal-card" id="proposalCandidato2">
                <h3>Mary Cruz</h3>
                <div id="candidato2Description"></div>
            </div>
        </div>
    </div>

    <footer>
        Derechos reservados UTA 2024
    </footer>

    <script>
        const propuestas = {
            "Ciencias Administrativas": {
                candidato1: [
                    { title: "Mejora de la infraestructura académica", description: "Renovación de edificios y adquisición de nuevos equipos." }
                ],
                candidato2: [
                    { title: "Desarrollo de programas de bienestar estudiantil", description: "Implementación de programas de apoyo psicológico y bienestar." }
                ]
            },
            "Ciencia e Ingeniería en Alimentos": {
                candidato1: [
                    { title: "Optimización de laboratorios de alimentos", description: "Mejoras en los laboratorios y prácticas para estudiantes." }
                ],
                candidato2: [
                    { title: "Creación de centros de investigación alimentaria", description: "Desarrollo de centros de investigación en tecnología alimentaria." }
                ]
            },
            "Jurisprudencia y Ciencias Sociales": {
                candidato1: [
                    { title: "Aulas interactivas", description: "Incorporar tecnología interactiva en las aulas para fomentar el aprendizaje dinámico." }
                ],
                candidato2: [
                    { title: "Clínica Jurídica Estudiantil", description: "Desarrollar una clínica jurídica donde los estudiantes puedan practicar con casos reales." }
                ]
            },
            "Contabilidad y Auditoría": {
                candidato1: [
                    { title: "Modernización del programa de contabilidad", description: "Mejoras en el software de contabilidad utilizado en clases." }
                ],
                candidato2: [
                    { title: "Integración de auditoría ambiental", description: "Incluir la auditoría ambiental en el currículo de los estudiantes." }
                ]
            },
            "Ciencias Humanas y de la Educación": {
                candidato1: [
                    { title: "Aulas inclusivas", description: "Creación de aulas inclusivas con acceso para estudiantes con discapacidades." }
                ],
                candidato2: [
                    { title: "Desarrollo pedagógico", description: "Programas de capacitación para los profesores en nuevas metodologías pedagógicas." }
                ]
            },
            "Ciencias de la Salud": {
                candidato1: [
                    { title: "Mejora de laboratorios", description: "Renovación de los laboratorios de prácticas médicas." }
                ],
                candidato2: [
                    { title: "Aulas modernas", description: "Equipar aulas con simuladores médicos avanzados." }
                ]
            },
            "Ingeniería Civil y Mecánica": {
                candidato1: [
                    { title: "Ampliación de laboratorios", description: "Agregar más laboratorios especializados en materiales de construcción." }
                ],
                candidato2: [
                    { title: "Nueva biblioteca técnica", description: "Desarrollar una biblioteca técnica con recursos avanzados." }
                ]
            },
            "Ingeniería en Sistemas, Electrónica e Industrial": {
                candidato1: [
                    { title: "Renovación de equipos", description: "Actualizar equipos de cómputo y electrónica." }
                ],
                candidato2: [
                    { title: "Mejora de la enseñanza online", description: "Desarrollar plataformas más eficientes para la enseñanza virtual." }
                ]
            },
            "default": {
                candidato1: [
                    { title: "No hay propuestas disponibles para este tema.", description: "" }
                ],
                candidato2: [
                    { title: "No hay propuestas disponibles para este tema.", description: "" }
                ]
            }
        };


        function filterProposals() {
            const faculty = document.getElementById("faculty").value;
            const candidato1Description = document.getElementById("candidato1Description");
            const candidato2Description = document.getElementById("candidato2Description");

            const selectedProposals = faculty === 'all'
                ? Object.values(propuestas).reduce((acc, val) => {
                    acc.candidato1 = [...acc.candidato1, ...val.candidato1.filter(p => p.title !== "No hay propuestas disponibles para este tema.")];
                    acc.candidato2 = [...acc.candidato2, ...val.candidato2.filter(p => p.title !== "No hay propuestas disponibles para este tema.")];
                    return acc;
                }, { candidato1: [], candidato2: [] })
                : propuestas[faculty] || propuestas["default"];

            // Candidato 1
            if (selectedProposals.candidato1.length === 0 || selectedProposals.candidato1[0].title === "No hay propuestas disponibles para este tema.") {
                candidato1Description.innerHTML = `<div class="proposal-item visible"><strong>No hay propuestas disponibles para este tema.</strong></div>`;
            } else {
                candidato1Description.innerHTML = selectedProposals.candidato1
                    .map((proposal, index) => `
                <div class="proposal-item visible">
                    <strong>Propuesta ${index + 1}: ${proposal.title}</strong>
                    <p>${proposal.description}</p>
                </div>
            `).join('');
            }

            // Candidato 2
            if (selectedProposals.candidato2.length === 0 || selectedProposals.candidato2[0].title === "No hay propuestas disponibles para este tema.") {
                candidato2Description.innerHTML = `<div class="proposal-item visible"><strong>No hay propuestas disponibles para este tema.</strong></div>`;
            } else {
                candidato2Description.innerHTML = selectedProposals.candidato2
                    .map((proposal, index) => `
                <div class="proposal-item visible">
                    <strong>Propuesta ${index + 1}: ${proposal.title}</strong>
                    <p>${proposal.description}</p>
                </div>
            `).join('');
            }
        }

        filterProposals();

    </script>
</body>

</html>
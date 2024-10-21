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

        .proposal-card p {
            font-size: 1em;
            color: #444;
            line-height: 1.6;
            margin-left: 15px;
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
                <div class="proposal-title">Propuestas del Candidato 1</div>
                <div id="candidato1Description"></div>
            </div>

            <!-- Propuesta Candidato 2 -->
            <div class="proposal-card" id="proposalCandidato2">
                <h3>Propuesta Candidato 2</h3>
                <div class="proposal-title">Propuestas del Candidato 2</div>
                <div id="candidato2Description"></div>
            </div>
        </div>
    </div>

    <footer>
        Derechos reservados UTA 2024
    </footer>

    <script>
        const propuestas = {
            "Facultad de Ciencias Administrativas": {
                candidato1: [
                    "Mejora de la infraestructura académica.",
                    "Reforma de planes de estudio.",
                    "Creación de centros de innovación.",
                    "Expansión de programas de investigación.",
                    "Fomento del emprendimiento universitario.",
                    "Renovación de bibliotecas.",
                    "Mejoras en el acceso digital.",
                    "Creación de laboratorios modernos.",
                    "Impulso a la internacionalización.",
                    "Aumento de becas estudiantiles."
                ],
                candidato2: [
                    "Desarrollo de programas de bienestar estudiantil.",
                    "Fomento de programas deportivos.",
                    "Ampliación de espacios recreativos.",
                    "Integración de tecnologías en la enseñanza.",
                    "Mejora de la infraestructura del campus.",
                    "Creación de laboratorios especializados.",
                    "Fortalecimiento de redes de apoyo.",
                    "Implementación de tutorías personalizadas.",
                    "Fomento de la movilidad internacional.",
                    "Establecimiento de convenios con empresas."
                ]
            },
            "Facultad de Ciencias de la Salud": {
                candidato1: [
                    "Mejora de Laboratorios - Renovación de los laboratorios de prácticas médicas.",
                    "Aulas Modernas - Equipar aulas con simuladores médicos.",
                    "Programas de Intercambio - Implementar programas de intercambio internacionales.",
                    "Formación Continua - Establecer cursos de formación continua para el personal médico.",
                    "Clínicas Universitarias - Reforma de clínicas universitarias.",
                    "Investigación Médica - Fomentar la investigación en medicina.",
                    "Bienestar Estudiantil - Crear programas de salud mental.",
                    "Colaboraciones con Hospitales - Ampliar la colaboración con hospitales regionales.",
                    "Mejora de Infraestructuras - Construir un nuevo edificio de laboratorios.",
                    "Acceso a Biblioteca Digital - Acceso ilimitado a bibliotecas médicas digitales."
                ],
                candidato2: [
                    "Deportes para la Salud - Crear más espacios deportivos.",
                    "Clínicas Móviles - Establecer clínicas móviles.",
                    "Biblioteca Especializada - Modernización de la biblioteca de la facultad.",
                    "Programa de Becas - Crear un programa de becas para estudiantes destacados.",
                    "Centros de Simulación - Construir centros de simulación avanzada.",
                    "Prevención de Enfermedades - Programas de prevención.",
                    "Movilidad Estudiantil - Facilitar la movilidad internacional.",
                    "Capacitación Docente - Capacitación continua para docentes.",
                    "Medicina Rural - Fomentar programas de medicina rural.",
                    "Servicio Comunitario - Programas de servicio comunitario."
                ]
            },
            "default": {
                candidato1: [
                    "No hay propuestas disponibles para este tema."
                ],
                candidato2: [
                    "No hay propuestas disponibles para este tema."
                ]
            }
        };

        function filterProposals() {
            const faculty = document.getElementById("faculty").value;
            const candidato1Description = document.getElementById("candidato1Description");
            const candidato2Description = document.getElementById("candidato2Description");

            const selectedProposals = faculty === 'all' 
                ? Object.values(propuestas).reduce((acc, val) => {
                    acc.candidato1 = [...acc.candidato1, ...val.candidato1];
                    acc.candidato2 = [...acc.candidato2, ...val.candidato2];
                    return acc;
                }, { candidato1: [], candidato2: [] })
                : propuestas[faculty] || propuestas["default"];

            candidato1Description.innerHTML = selectedProposals.candidato1
                .map((proposal, index) => `<div class="proposal-item visible"><strong>Propuesta ${index + 1}:</strong> ${proposal}</div>`)
                .join('');
            candidato2Description.innerHTML = selectedProposals.candidato2
                .map((proposal, index) => `<div class="proposal-item visible"><strong>Propuesta ${index + 1}:</strong> ${proposal}</div>`)
                .join('');
        }

        
        filterProposals();
    </script>
</body>
</html>
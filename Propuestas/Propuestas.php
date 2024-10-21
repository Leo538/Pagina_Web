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

        /* Estilos para las propuestas */
        .container {
            padding: 20px;
            text-align: center;
        }

        .propuestas-container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            margin-top: 20px;
        }

        .candidato-box {
            width: 45%;
            padding: 20px;
            border: 2px solid #000;
        }

        .candidato-box h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .propuestas-list {
            list-style-type: none;
            padding: 0;
        }

        .propuestas-list li {
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #b22222; 
            color: white;
            margin-top: 50px;
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

    <!-- Contenedor de las propuestas de los candidatos -->
    <div class="container">
        <div class="propuestas-container">
            <!-- Propuestas de Candidato 1 -->
            <div class="candidato-box" id="candidato1">
                <h2>CANDIDATO 1</h2>
                <ul class="propuestas-list">
                    <li>Propuesta 1 del Candidato 1</li>
                    <li>Propuesta 2 del Candidato 1</li>
                    <li>Propuesta 3 del Candidato 1</li>
                </ul>
            </div>

            <!-- Propuestas de Candidato 2 -->
            <div class="candidato-box" id="candidato2">
                <h2>CANDIDATO 2</h2>
                <ul class="propuestas-list">
                    <li>Propuesta 1 del Candidato 2</li>
                    <li>Propuesta 2 del Candidato 2</li>
                    <li>Propuesta 3 del Candidato 2</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-rights">
        Derechos reservados UTA 2024
    </div>
</body>
</html>

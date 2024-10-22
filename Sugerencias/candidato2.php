<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Sobre nuestros estudiantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E0E0E0;
            overflow-x: hidden; /* Evita el desbordamiento horizontal */
        }
        
        * {
            box-sizing: border-box; /* Asegura que el padding y borde se incluyan en el tamaño total del elemento */
        }
        
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #2B4657;
            color: #FFF;
            width: 100%; /* Asegura que el contenedor ocupe el 100% del ancho de la pantalla */
            padding: 20px;
            box-sizing: border-box;
            max-width: 100vw; /* Evita que el contenedor sobrepase el 100% del ancho de la ventana */
            overflow: hidden; /* Evita que el contenido desborde horizontalmente */
        }
        .card {
            display: flex;
            background-color: #F7F7F7;
            width: 60%;
            max-width: 4000px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 50%;
            height: auto;
            object-fit: cover;
        }
        .content {
            padding: 40px;
            flex: 1;
        }
        .content h1 {
            color: #2B4657;
            font-size: 2em;
            margin-bottom: 20px;
        }
        .content p {
            color: #7A7A7A;
            line-height: 1.6;
        }
        .content a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #2B4657;
            color: #FFF;
            text-decoration: none;
            border-radius: 5px;
        }
        .content a:hover {
            background-color: #435A6A;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #b22222;
            width: 100%; 
            box-sizing: border-box; 
            margin: 0; 
            position: fixed;
            top: 0; 
            left: 0; 
            right: 0; 
            z-index: 1000; 
            transition: background-color 0.3s ease, transform 0.3s ease; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); 
        }
        header.hidden {
            transform: translateY(-100%);
        }

        header:not(.hidden) {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); 
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
        .form-section {
            margin-top: 20px;
        }
        .form-section label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.2em;
            color: #2B4657;
        }
        .form-section textarea {
            width: 100%;
            height: 80px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #CCC;
            border-radius: 5px;
            margin-bottom: 20px;
            resize: none;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .buttons a {
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
            color: white; /* Text color */
            text-decoration: none; /* No underline */
            display: inline-block; /* Make it block */
        }
        .buttons a:hover {
            background-color: #435A6A;
        }
        .btn-enviar {
            background-color: #2B4657;
        }
        .btn-regresar {
            background-color: #CCC;
            color: #2B4657;
        }
        .content h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <header id="main-header">
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

<div class="container">
    <div class="card">
        <img src="Img/mari2.jpg" alt="Imagen de un estudiante">
        <div class="content">
            <div class="form-section">
                <h1 style="text-align: center;">Ing Mg Mari Cruz</h1>
                <label for="sugerencias">Sugerencias:</label>
                <textarea id="sugerencias" placeholder="Escribe tus sugerencias aquí..."></textarea>
            </div>
            <div class="form-section">
                <label for="propuestas">Propuestas:</label>
                <textarea id="propuestas" placeholder="Escribe tus propuestas aquí..."></textarea>
            </div>
            <div class="form-section">
                <label for="comentarios">Comentarios:</label>
                <textarea id="comentarios" placeholder="Escribe tus comentarios sobre la candidata aquí..."></textarea>
            </div>
            <div class="buttons">
                <a href="URL_DE_ENVIO" class="btn-enviar">Enviar Sugerencias</a>
                <a href="index.php" class="btn-regresar">Regresar</a>
            </div>
            
        </div>
    </div>
</div>

<div class="footer-rights">
    Derechos reservados Team Sangre 2024
</div>

</body>
</html>

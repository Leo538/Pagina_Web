<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Sugerencias y Propuestas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Img/rec.jpg'); /* URL de tu imagen de fondo */
            background-size: cover; /* Hace que la imagen cubra todo el fondo */
            background-position: center; /* Centra la imagen */            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px;
            margin: auto;
            margin-top: 100px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        .candidate {
            width: 48%;
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .candidate img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        textarea {
            width: 100%;
            height: 100px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            font-size: 16px;
        }
        .button-container {
            display: flex;
            justify-content: center; /* Centra los botones */
            margin-top: 20px; /* Espacio entre el contenedor y los botones */
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 0 20px; /* Mayor espacio entre los botones */
        }
        button:hover {
            background-color: #0056b3;
        }
        .footer-rights {
            text-align: center;
            margin-top: 20px;
            color: #666;
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
                    margin-top: 20px; 
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
        <h1>Sugerencias y Propuestas Generales</h1>
        <div class="flex-container">
            <div class="candidate">
                <img src="Img/mari.jpg" alt="Candidato 1">
                <h2>Sugerencias:</h2>
                <textarea placeholder="Escribe tus sugerencias aquí..."></textarea>
            </div>
            <div class="candidate">
                <img src="Img/mari2.jpg" alt="Candidato 2">
                <h2>Propuestas:</h2>
                <textarea placeholder="Escribe tus propuestas aquí..."></textarea>
            </div>
        </div>
        <div class="button-container">
            <button onclick="goBack()">Regresar</button>
            <button onclick="submitForm()">Enviar</button>
        </div>
    </div>

    <script>
        function submitForm() {
            alert("Sugerencias y Propuestas enviadas!");
            // Aquí puedes agregar lógica para enviar el formulario.
        }

        function goBack() {
            window.location.href = "index.php"; // Redirige a otra página
        }
    </script>
</body>
</html>

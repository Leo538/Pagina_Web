<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Votación</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('Img/voto.JPG'); 
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        .container {
            max-width: 800px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
            animation: slideIn 0.5s ease;
            margin-top: 100px; /* Mover el formulario más abajo */
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        h1 {
            text-align: center;
            color: #b22222; /* Cambiado al color del header */
            margin-bottom: 20px;
        }
        .formulario {
            margin-bottom: 20px;
            text-align: center;
        }
        .formulario input {
            padding: 10px;
            margin: 5px 0;
            border: 2px solid #b22222; /* Cambiado al color del header */
            border-radius: 5px;
            width: calc(100% - 20px);
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        .formulario input:focus {
            border-color: #7a1b1b; /* Un rojo más oscuro para el enfoque */
        }
        .candidatos {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .candidato {
            border: 2px solid #b22222; /* Cambiado al color del header */
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(178, 34, 34, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .candidato:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(178, 34, 34, 0.4);
        }
        .candidato img {
            width: 100%;
            height: 200px;
            object-fit: contain;
            transition: transform 0.3s;
            border-bottom: 2px solid #b22222; /* Cambiado al color del header */
        }
        .candidato img:hover {
            transform: scale(1.05);
        }
        .candidato div {
            padding: 15px;
            text-align: center;
            flex-grow: 1;
        }
        .candidato h2 {
            margin: 10px 0;
            color: #343a40;
        }
        .botones {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        button {
            padding: 10px 15px;
            border: 2px solid #b22222; /* Cambiado al color del header */
            border-radius: 5px;
            cursor: pointer;
            background-color: #b22222; /* Fondo rojo similar al header */
            color: white;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
            flex: 1;
            margin: 0 5px;
        }
        button:hover {
            background-color: #d62828; /* Rojo más oscuro al pasar el mouse */
            transform: translateY(-3px);
        }
        button:active {
            transform: translateY(1px);
        }
        .votos-section {
            margin-top: 30px;
            display: none;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 10px;
            animation: fadeIn 0.5s ease;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .voto-candidato {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            border: 2px solid #b22222; /* Cambiado al color del header */
            border-radius: 10px;
            overflow: hidden;
            padding: 10px;
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .voto-candidato img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
            border: 2px solid #b22222; /* Cambiado al color del header */
        }
        .voto-candidato div {
            flex-grow: 1;
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
    </style>
</head>
<body>
    <header id="main-header">
        <div class="logo">
            <img src="Img\logo.png" alt="UTA Logo"> 
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
        <h1>SELECCIONAR CANDIDATO PARA EL VOTO</h1>
        
        <!-- Formulario de usuario -->
        <div class="formulario">
            <input type="text" id="nombre" placeholder="Nombre de usuario" required>
            <input type="email" id="correo" placeholder="Correo electrónico" required>
        </div>
        
        <div class="candidatos">
            <div class="candidato">
                <img src="Img/mari.jpg" alt="Candidato 1">
                <div>
                    <h2>Nombre del Candidato 1</h2>
                    <label>
                        <input type="radio" name="candidato" value="candidato1"> Seleccionar
                    </label>
                </div>
            </div>
            <div class="candidato">
                <img src="Img/mari2.jpg" alt="Candidato 2">
                <div>
                    <h2>Nombre del Candidato 2</h2>
                    <label>
                        <input type="radio" name="candidato" value="candidato2"> Seleccionar
                    </label>
                </div>
            </div>
        </div>
        
        <div class="botones">
            <button onclick="location.href='index.php'">Regresar</button>
            <button onclick="validarFormulario()">Votar</button>
            <button onclick="verVotos()">Ver todos los votos</button>
        </div>
        
        <div class="votos-section" id="votosSection">
            <h2>Resultados de Votos</h2>
            <div class="voto-candidato">
                <img src="Img/mari.jpg" alt="Candidato 1">
                <div>
                    <h3>Nombre del Candidato 1</h3>
                    <p>Cantidad de votos: <strong>5</strong></p>
                </div>
            </div>
            <div class="voto-candidato">
                <img src="Img/mari2.jpg" alt="Candidato 2">
                <div>
                    <h3>Nombre del Candidato 2</h3>
                    <p>Cantidad de votos: <strong>3</strong></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validarFormulario() {
            const nombre = document.getElementById('nombre').value;
            const correo = document.getElementById('correo').value;
            const candidatoSeleccionado = document.querySelector('input[name="candidato"]:checked');

            if (!nombre || !correo || !candidatoSeleccionado) {
                alert('Por favor, complete todos los campos antes de votar.');
            } else {
                alert(`Gracias por votar, ${nombre}!`);
                // Aquí puedes agregar el código para enviar el voto
            }
        }

        function verVotos() {
            const votosSection = document.getElementById('votosSection');
            // Alternar la visibilidad de la sección de votos
            if (votosSection.style.display === "none" || votosSection.style.display === "") {
                votosSection.style.display = "block";
            } else {
                votosSection.style.display = "none";
            }
        }
    </script>
</body>
</html>

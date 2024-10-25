// Mensaje para verificar que el archivo de JavaScript está cargado
console.log("Script cargado correctamente");

function filterProposals() {
    console.log("Evento onchange activado"); // Verificar si el evento se activa

    var selectedFaculty = document.getElementById("faculty").value;

    // Realizar una solicitud AJAX para obtener las propuestas desde el servidor
    fetch('http://localhost/Pagina_Web/Pagina_Web/src/propuestas_queries.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `category=${encodeURIComponent(selectedFaculty)}`
    })
    .then(response => response.json())
    .then(data => {
        console.log("Datos recibidos del servidor:", data); // Verificar los datos recibidos
        displayProposals(data);
    })
    .catch(error => console.error('Error:', error));
}

function displayProposals(proposals) {
    const candidato1Description = document.getElementById("candidato1Description");
    const candidato2Description = document.getElementById("candidato2Description");

    // Limpia el contenido de las descripciones anteriores
    candidato1Description.innerHTML = "";
    candidato2Description.innerHTML = "";

    // Nombres de los partidos (convertidos a minúsculas y sin espacios extra)
    const nombrePartido1 = 'sueña, crea, innova'.toLowerCase().trim(); 
    const nombrePartido2 = 'juntos por el cambio'.toLowerCase().trim();

    // Filtrar las propuestas por partido
    const partido1Proposals = proposals.filter(proposal => proposal.partido.toLowerCase().trim() === nombrePartido1);
    const partido2Proposals = proposals.filter(proposal => proposal.partido.toLowerCase().trim() === nombrePartido2);

    console.log("Propuestas Partido 1:", partido1Proposals); // Verificar filtrado
    console.log("Propuestas Partido 2:", partido2Proposals);

    // Mostrar las propuestas del Partido 1
    if (partido1Proposals.length > 0) {
        candidato1Description.innerHTML = partido1Proposals.map((proposal, index) => `
            <div class="proposal-item visible">
                <strong>Propuesta ${index + 1}: ${proposal.titulo}</strong>
                <p>${proposal.descripcion}</p>
                <p><strong>Categoría:</strong> ${proposal.categoria}</p>
            </div>
        `).join('');
    } else {
        candidato1Description.innerHTML = `<div class="proposal-item visible"><strong>No hay propuestas disponibles para este tema.</strong></div>`;
    }

    // Mostrar las propuestas del Partido 2
    if (partido2Proposals.length > 0) {
        candidato2Description.innerHTML = partido2Proposals.map((proposal, index) => `
            <div class="proposal-item visible">
                <strong>Propuesta ${index + 1}: ${proposal.titulo}</strong>
                <p>${proposal.descripcion}</p>
                <p><strong>Categoría:</strong> ${proposal.categoria}</p>
            </div>
        `).join('');
    } else {
        candidato2Description.innerHTML = `<div class="proposal-item visible"><strong>No hay propuestas disponibles para este tema.</strong></div>`;
    }
}


// Inicializar con la primera opción
filterProposals();

function filterProposals() {
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

    // Nombres de los partidos
    const nombrePartido1 = 'Sueña, Crea, Innova'; 
    const nombrePartido2 = 'Juntos por el Cambio';

    // Filtrar las propuestas por partido
    const partido1Proposals = proposals.filter(proposal => proposal.partido === nombrePartido1);
    const partido2Proposals = proposals.filter(proposal => proposal.partido === nombrePartido2);

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

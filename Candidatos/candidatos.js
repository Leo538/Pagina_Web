document.querySelectorAll('.open-modal').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        console.log("Evento 'Ver más' capturado");

        const candidateId = this.getAttribute('data-id');  // Obtener el ID del candidato desde el botón
        const modalId = this.getAttribute('data-modal');   // Obtener el ID del modal a abrir
        console.log("ID del candidato:", candidateId);

        // Hacer una solicitud AJAX para obtener los datos del candidato
        fetch(`../src/candidatos_queries.php?id=${candidateId}`)
            .then(response => response.json())
            .then(candidate => {
                if (candidate.error) {
                    console.error(candidate.error);
                    return;
                }

                // Verificar si los elementos existen antes de intentar modificar sus propiedades
                const imgElement = document.getElementById(`candidate-img-${candidateId}`);
                const nameElement = document.getElementById(`candidate-name-${candidateId}`);
                const bioElement = document.getElementById(`candidate-bio-${candidateId}`);
                const experienceElement = document.getElementById(`candidate-experience-${candidateId}`);
                const visionElement = document.getElementById(`candidate-vision-${candidateId}`);
                const achievementsElement = document.getElementById(`candidate-achievements-${candidateId}`);

                // Verifica si los elementos existen
                if (!imgElement || !nameElement || !bioElement || !experienceElement || !visionElement || !achievementsElement) {
                    console.error("Error: No se encontraron los elementos del modal para el candidato con ID:", candidateId);
                    return;
                }

                // Rellenar la información en el modal correspondiente
                imgElement.src = `./Img/${candidate.name}.png`;
                nameElement.textContent = candidate.name;
                bioElement.textContent = candidate.bio;
                experienceElement.textContent = candidate.experience;
                visionElement.textContent = candidate.vision;
                achievementsElement.textContent = candidate.achievements;

                // Mostrar el modal específico para este candidato
                document.getElementById(modalId).style.display = 'flex';
            })
            .catch(error => console.error('Error al obtener los datos:', error));
    });
});

// Cerrar el modal cuando se haga clic en el botón de cierre
document.querySelectorAll('.close-modal').forEach(button => {
    button.addEventListener('click', function() {
        this.closest('.modal').style.display = 'none';
    });
});

// Cerrar el modal si se hace clic fuera de la ventana modal
window.addEventListener('click', function(event) {
    document.querySelectorAll('.modal').forEach(modal => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});

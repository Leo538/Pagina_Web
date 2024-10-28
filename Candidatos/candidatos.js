// Lógica para cargar todos los candidatos organizados por cargo
fetch('../src/candidatos_queries.php')
    .then(response => response.json())
    .then(candidates => {
        candidates.forEach(candidate => {
            // Crear el HTML para cada candidato
            const candidateCard = document.createElement('div');
            candidateCard.classList.add('card');
            candidateCard.innerHTML = `
                <img src="./Img/${candidate.name.replace(" ", "_")}.png" alt="${candidate.name}">
                <h3>${candidate.name}</h3>
                <p>${candidate.bio}</p>
                <button class="open-modal" data-id="${candidate.id}" data-modal="modal${candidate.id}" data-img="${candidate.name.replace(" ", "_")}.png">Ver más</button>
            `;

            // Selecciona el contenedor basado en el cargo del candidato
            let container;
            switch (candidate.position) {
                case 'Rectora':
                    container = document.getElementById('rectora');
                    break;
                case 'Vicerrector Administrativo':
                    container = document.getElementById('vicerrector-administrativo');
                    break;
                case 'Vicerrector Académico':
                    container = document.getElementById('vicerrector-academico');
                    break;
                case 'Vicerrectora de Investigación':
                    container = document.getElementById('vicerrectora-investigacion');
                    break;
                default:
                    console.error("Posición desconocida:", candidate.position);
            }

            // Añade la tarjeta del candidato al contenedor correspondiente
            if (container) {
                container.appendChild(candidateCard);
            }
        });

        // Añadir event listeners para abrir el modal después de que los candidatos se hayan cargado
        document.querySelectorAll('.open-modal').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const candidateId = this.getAttribute('data-id');
                const modalId = this.getAttribute('data-modal');
                const imgSrc = this.getAttribute('data-img');

                // Mostrar el modal específico para este candidato
                const imgElement = document.getElementById(`candidate-img-${candidateId}`);
                imgElement.src = `./Img/${imgSrc}`;

                // Aquí puedes agregar más lógica para llenar el contenido del modal si es necesario
                document.getElementById(modalId).style.display = 'flex';
            });
        });
    })
    .catch(error => console.error('Error al cargar los candidatos:', error));

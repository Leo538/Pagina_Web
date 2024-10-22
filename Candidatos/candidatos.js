// Datos de los candidatos
const candidates = {
    1: {
        img: "./Img/Mary_cruz.png",
        name: "Rectora",
        bio: "Biografía de la Rectora. Descripción extensa del candidato.",
        achievements: "Logros importantes de la Rectora, premios, estudios, etc."
    },
    2: {
        img: "candidate2.jpg",
        name: "Candidato 2",
        bio: "Biografía del Candidato 2. Descripción extensa del candidato.",
        achievements: "Logros importantes del Candidato 2, premios, estudios, etc."
    },
    3: {
        img: "candidate3.jpg",
        name: "Candidato 3",
        bio: "Biografía del Candidato 3. Descripción extensa del candidato.",
        achievements: "Logros importantes del Candidato 3, premios, estudios, etc."
    },
    4: {
        img: "candidate4.jpg",
        name: "Candidato 4",
        bio: "Biografía del Candidato 4. Descripción extensa del candidato.",
        achievements: "Logros importantes del Candidato 4, premios, estudios, etc."
    }
};

// Abrir el modal
document.querySelectorAll('.open-modal').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        const candidateId = this.getAttribute('data-candidate');
        const candidate = candidates[candidateId];

        // Rellenar la información en el modal
        document.getElementById('candidate-img').src = candidate.img;
        document.getElementById('candidate-name').textContent = candidate.name;
        document.getElementById('candidate-bio').textContent = candidate.bio;
        document.getElementById('candidate-achievements').textContent = candidate.achievements;

        // Mostrar el modal
        document.getElementById('candidateModal').style.display = 'flex';
    });
});

// Cerrar el modal
document.querySelector('.close-modal').addEventListener('click', function() {
    document.getElementById('candidateModal').style.display = 'none';
});

// Cerrar el modal si se hace clic fuera de la ventana modal
window.addEventListener('click', function(event) {
    const modal = document.getElementById('candidateModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

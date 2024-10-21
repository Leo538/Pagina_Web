const propuestas = {
    "Ciencias Administrativas": {
        candidato1: [
            { title: "Mejora de la infraestructura académica", description: "Renovación de edificios y adquisición de nuevos equipos." }
        ],
        candidato2: [
            { title: "Desarrollo de programas de bienestar estudiantil", description: "Implementación de programas de apoyo psicológico y bienestar." }
        ]
    },
    "Ciencia e Ingeniería en Alimentos": {
        candidato1: [
            { title: "Optimización de laboratorios de alimentos", description: "Mejoras en los laboratorios y prácticas para estudiantes." }
        ],
        candidato2: [
            { title: "Creación de centros de investigación alimentaria", description: "Desarrollo de centros de investigación en tecnología alimentaria." }
        ]
    },
    "Jurisprudencia y Ciencias Sociales": {
        candidato1: [
            { title: "Aulas interactivas", description: "Incorporar tecnología interactiva en las aulas para fomentar el aprendizaje dinámico." }
        ],
        candidato2: [
            { title: "Clínica Jurídica Estudiantil", description: "Desarrollar una clínica jurídica donde los estudiantes puedan practicar con casos reales." }
        ]
    },
    "Contabilidad y Auditoría": {
        candidato1: [
            { title: "Modernización del programa de contabilidad", description: "Mejoras en el software de contabilidad utilizado en clases." }
        ],
        candidato2: [
            { title: "Integración de auditoría ambiental", description: "Incluir la auditoría ambiental en el currículo de los estudiantes." }
        ]
    },
    "Ciencias Humanas y de la Educación": {
        candidato1: [
            { title: "Aulas inclusivas", description: "Creación de aulas inclusivas con acceso para estudiantes con discapacidades." }
        ],
        candidato2: [
            { title: "Desarrollo pedagógico", description: "Programas de capacitación para los profesores en nuevas metodologías pedagógicas." }
        ]
    },
    "Ciencias de la Salud": {
        candidato1: [
            { title: "Mejora de laboratorios", description: "Renovación de los laboratorios de prácticas médicas." }
        ],
        candidato2: [
            { title: "Aulas modernas", description: "Equipar aulas con simuladores médicos avanzados." }
        ]
    },
    "Ingeniería Civil y Mecánica": {
        candidato1: [
            { title: "Ampliación de laboratorios", description: "Agregar más laboratorios especializados en materiales de construcción." }
        ],
        candidato2: [
            { title: "Nueva biblioteca técnica", description: "Desarrollar una biblioteca técnica con recursos avanzados." }
        ]
    },
    "Ingeniería en Sistemas, Electrónica e Industrial": {
        candidato1: [
            { title: "Renovación de equipos", description: "Actualizar equipos de cómputo y electrónica." }
        ],
        candidato2: [
            { title: "Mejora de la enseñanza online", description: "Desarrollar plataformas más eficientes para la enseñanza virtual." }
        ]
    },
    "default": {
        candidato1: [
            { title: "No hay propuestas disponibles para este tema.", description: "" }
        ],
        candidato2: [
            { title: "No hay propuestas disponibles para este tema.", description: "" }
        ]
    }
};

function filterProposals() {
    const faculty = document.getElementById("faculty").value;
    const candidato1Description = document.getElementById("candidato1Description");
    const candidato2Description = document.getElementById("candidato2Description");

    const selectedProposals = faculty === 'all'
        ? Object.values(propuestas).reduce((acc, val) => {
            acc.candidato1 = [...acc.candidato1, ...val.candidato1.filter(p => p.title !== "No hay propuestas disponibles para este tema.")];
            acc.candidato2 = [...acc.candidato2, ...val.candidato2.filter(p => p.title !== "No hay propuestas disponibles para este tema.")];
            return acc;
        }, { candidato1: [], candidato2: [] })
        : propuestas[faculty] || propuestas["default"];

    // Candidato 1
    if (selectedProposals.candidato1.length === 0 || selectedProposals.candidato1[0].title === "No hay propuestas disponibles para este tema.") {
        candidato1Description.innerHTML = `<div class="proposal-item visible"><strong>No hay propuestas disponibles para este tema.</strong></div>`;
    } else {
        candidato1Description.innerHTML = selectedProposals.candidato1
            .map((proposal, index) => `
                <div class="proposal-item visible">
                    <strong>Propuesta ${index + 1}: ${proposal.title}</strong>
                    <p>${proposal.description}</p>
                </div>
            `).join('');
    }

    // Candidato 2
    if (selectedProposals.candidato2.length === 0 || selectedProposals.candidato2[0].title === "No hay propuestas disponibles para este tema.") {
        candidato2Description.innerHTML = `<div class="proposal-item visible"><strong>No hay propuestas disponibles para este tema.</strong></div>`;
    } else {
        candidato2Description.innerHTML = selectedProposals.candidato2
            .map((proposal, index) => `
                <div class="proposal-item visible">
                    <strong>Propuesta ${index + 1}: ${proposal.title}</strong>
                    <p>${proposal.description}</p>
                </div>
            `).join('');
    }
}

filterProposals();

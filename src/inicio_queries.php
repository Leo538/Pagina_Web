<?php
// Incluir archivo de configuración para la conexión a la base de datos
include('../config/config.php');

// Consulta para obtener hasta 5 eventos o noticias aleatorios y sin repeticiones
$sql_eventos_noticias = "SELECT TIT_EVT_NOT, DESC_EVT_NOT FROM EVENTOS_NOTICIAS ORDER BY RAND() LIMIT 5";
$result_eventos_noticias = $connection->query($sql_eventos_noticias);

// Manejar errores de la consulta de eventos y noticias
if (!$result_eventos_noticias) {
    die('Error en la consulta de eventos y noticias: ' . $conn->error);
}

// Crear un array para almacenar los eventos y noticias
$eventos_noticias = [];
if ($result_eventos_noticias->num_rows > 0) {
    while ($row = $result_eventos_noticias->fetch_assoc()) {
        $eventos_noticias[] = [
            'titulo' => $row['TIT_EVT_NOT'],
            'descripcion' => $row['DESC_EVT_NOT']
        ];
    }
}

// Si no hay eventos o noticias, agregar un mensaje
if (empty($eventos_noticias)) {
    $eventos_noticias[] = [
        'titulo' => 'No hay eventos o noticias disponibles',
        'descripcion' => ''
    ];
}

// Consulta para obtener una sugerencia aleatoria junto con el nombre del partido político
$sql_sugerencia = "SELECT S.SUGERENCIAS_SUG, S.PROPUESTA_SUG, P.NOM_PAR 
                   FROM SUGERENCIAS S
                   JOIN PARTIDOS_POLITICOS P ON S.ID_PAR_SUG = P.ID_PAR
                   ORDER BY RAND() 
                   LIMIT 1";
$stmt = $conn->prepare($sql_sugerencia);
$stmt->execute();
$result_sugerencia = $stmt->get_result();

// Manejar errores de la consulta de sugerencias
if (!$result_sugerencia) {
    die('Error en la consulta de sugerencias: ' . $conn->error);
}

// Obtener la sugerencia
$sugerencia = $result_sugerencia->fetch_assoc();
$sugerencia_titulo = $sugerencia['SUGERENCIAS_SUG'] ?? 'No hay sugerencias disponibles';
$sugerencia_descripcion = $sugerencia['PROPUESTA_SUG'] ?? '';
$nombre_partido = $sugerencia['NOM_PAR'] ?? 'No disponible';

// Obtener un candidato aleatorio
$sql_candidato = "SELECT NOM_CAN, BIOGRAFIA_CAN FROM CANDIDATOS ORDER BY RAND() LIMIT 1";
$stmt_candidato = $conn->prepare($sql_candidato);
$stmt_candidato->execute();
$candidato_result = $stmt_candidato->get_result();
$candidato = $candidato_result->fetch_assoc();
$candidato_nombre = $candidato['NOM_CAN'] ?? 'No disponible';
$candidato_biografia = $candidato['BIOGRAFIA_CAN'] ?? 'No disponible';

// Obtener una propuesta aleatoria
$sql_propuesta = "SELECT TIT_PRO, DESC_PRO FROM PROPUESTAS ORDER BY RAND() LIMIT 1";
$stmt_propuesta = $conn->prepare($sql_propuesta);
$stmt_propuesta->execute();
$propuesta_result = $stmt_propuesta->get_result();
$propuesta = $propuesta_result->fetch_assoc();
$propuesta_titulo = $propuesta['TIT_PRO'] ?? 'No disponible';
$propuesta_descripcion = $propuesta['DESC_PRO'] ?? 'No disponible';

// Obtener un evento/noticia aleatorio para el slider
$sql_evento_random = "SELECT TIT_EVT_NOT, DESC_EVT_NOT FROM EVENTOS_NOTICIAS ORDER BY RAND() LIMIT 1";
$stmt_evento_random = $conn->prepare($sql_evento_random);
$stmt_evento_random->execute();
$result_evento_random = $stmt_evento_random->get_result();

// Manejar errores de la consulta de eventos aleatorios
if (!$result_evento_random) {
    die('Error en la consulta de evento aleatorio: ' . $conn->error);
}

// Obtener el evento aleatorio para el slider
$evento_random = $result_evento_random->fetch_assoc();
$evento_titulo = $evento_random['TIT_EVT_NOT'] ?? 'No disponible';
$evento_descripcion = $evento_random['DESC_EVT_NOT'] ?? 'No disponible';

// Cerrar conexión
$conn->close();

// Devolver los resultados
return $eventos_noticias; // Esto es opcional si solo necesitas los eventos en la página actual.
?>
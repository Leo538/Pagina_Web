<?php
// Conectar a la base de datos
include('../config/config.php');

// Consulta para obtener eventos y noticias
$query = "SELECT ID_EVT_NOT, TIT_EVT_NOT, DESC_EVT_NOT, FECHA_EVT_NOT, TIPO_REG_EVT_NOT, UBICACION_EVT_NOT, NOM_PAR 
          FROM EVENTOS_NOTICIAS 
          JOIN PARTIDOS_POLITICOS ON EVENTOS_NOTICIAS.ID_PAR_EVT_NOT = PARTIDOS_POLITICOS.ID_PAR 
          ORDER BY FECHA_EVT_NOT DESC";

$result = $connection->query($query);

if ($result->num_rows > 0) {
    $events = [];
    $news = [];

    // Iterar sobre los resultados y separarlos en eventos y noticias
    while ($row = $result->fetch_assoc()) {
        if ($row['TIPO_REG_EVT_NOT'] == 'EVENTO') {
            $events[] = $row;
        } else if ($row['TIPO_REG_EVT_NOT'] == 'NOTICIA') {
            $news[] = $row;
        }
    }

    // Enviar los resultados en formato JSON
    echo json_encode(['events' => $events, 'news' => $news]);

} else {
    echo json_encode(['events' => [], 'news' => []]);
}

// Cerrar conexión
$connection->close();
?>

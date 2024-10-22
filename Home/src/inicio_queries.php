<?php
header('Content-Type: application/json');

// Incluir archivo de configuración para la conexión a la base de datos
include('../config/config.php');

// Inicializar el array de respuesta
$response = array();

// Consulta de candidatos
$sql_candidatos = "SELECT CANDIDATOS.NOM_CAN 
                   FROM CANDIDATOS";
$result_candidatos = $connection->query($sql_candidatos);

// Manejar errores de la consulta de candidatos
if (!$result_candidatos) {
    die('Error en la consulta de candidatos: ' . $connection->error);
}

// Procesar resultados de candidatos
$candidatos = array();
if ($result_candidatos->num_rows > 0) {
    while ($row = $result_candidatos->fetch_assoc()) {
        $candidatos[] = array(
            'nombre' => $row['NOM_CAN']
        );
    }
}

// Agregar candidatos al array de respuesta
$response['candidatos'] = $candidatos;

// Consulta de eventos y noticias
$sql_eventos_noticias = "SELECT TIT_EVT_NOT, DESC_EVT_NOT 
                          FROM EVENTOS_NOTICIAS";
$result_eventos_noticias = $connection->query($sql_eventos_noticias);

// Manejar errores de la consulta de eventos y noticias
if (!$result_eventos_noticias) {
    die('Error en la consulta de eventos/noticias: ' . $connection->error);
}

// Procesar resultados de eventos y noticias
$eventos_noticias = array();
if ($result_eventos_noticias->num_rows > 0) {
    while ($row = $result_eventos_noticias->fetch_assoc()) {
        $eventos_noticias[] = array(
            'titulo' => $row['TIT_EVT_NOT'],
            'descripcion' => $row['DESC_EVT_NOT']
        );
    }
}

// Agregar eventos y noticias al array de respuesta
$response['eventos_noticias'] = $eventos_noticias;

// Enviar respuesta JSON
echo json_encode($response);
?>

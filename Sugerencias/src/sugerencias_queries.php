<?php
header('Content-Type: application/json');

// Incluir archivo de configuración para la conexión a la base de datos
include('../config/config.php');

// Inicializar el array de respuesta
$response = array();

// Consulta de sugerencias
$sql_sugerencias = "SELECT 
                        USUARIOS.NOM_USU,
                        USUARIOS.EMAIL_USU,
                        SUGERENCIAS.SUGERENCIAS_SUG,
                        SUGERENCIAS.PROPUESTA_SUG,
                        SUGERENCIAS.COMENTARIOS_SUG,
                        PARTIDOS_POLITICOS.NOM_PAR
                    FROM 
                        SUGERENCIAS
                    INNER JOIN 
                        USUARIOS ON SUGERENCIAS.ID_USU_PER = USUARIOS.ID_USU
                    INNER JOIN 
                        PARTIDOS_POLITICOS ON SUGERENCIAS.ID_PAR_SUG = PARTIDOS_POLITICOS.ID_PAR";
$result_sugerencias = $connection->query($sql_sugerencias);

// Manejar errores de la consulta de sugerencias
if (!$result_sugerencias) {
    die('Error en la consulta de sugerencias: ' . $connection->error);
}

// Procesar resultados de sugerencias
$sugerencias = array();
if ($result_sugerencias->num_rows > 0) {
    while ($row = $result_sugerencias->fetch_assoc()) {
        $sugerencias[] = array(
            'nombre_usuario' => $row['NOM_USU'],
            'email_usuario' => $row['EMAIL_USU'],
            'sugerencias' => $row['SUGERENCIAS_SUG'],
            'propuestas' => $row['PROPUESTA_SUG'],
            'comentarios' => $row['COMENTARIOS_SUG'],
            'partido_politico' => $row['NOM_PAR']
        );
    }
}

// Agregar sugerencias al array de respuesta
$response['sugerencias'] = $sugerencias;

// Consulta de votos
$sql_votos = "SELECT 
                VOTOS.ID_VOT,
                PARTIDOS_POLITICOS.NOM_PAR
              FROM 
                VOTOS
              INNER JOIN 
                PARTIDOS_POLITICOS ON VOTOS.ID_PAR_VOT = PARTIDOS_POLITICOS.ID_PAR";
$result_votos = $connection->query($sql_votos);

// Manejar errores de la consulta de votos
if (!$result_votos) {
    die('Error en la consulta de votos: ' . $connection->error);
}

// Procesar resultados de votos
$votos = array();
if ($result_votos->num_rows > 0) {
    while ($row = $result_votos->fetch_assoc()) {
        $votos[] = array(
            'id_voto' => $row['ID_VOT'],
            'partido_politico' => $row['NOM_PAR']
        );
    }
}

// Agregar votos al array de respuesta
$response['votos'] = $votos;

// Consulta de registros de votos
$sql_registros_votos = "SELECT 
                          USUARIOS.NOM_USU,
                          VOTOS.ID_VOT,
                          PARTIDOS_POLITICOS.NOM_PAR
                        FROM 
                          REGISTROS_VOTOS
                        INNER JOIN 
                          USUARIOS ON REGISTROS_VOTOS.ID_USU_RES = USUARIOS.ID_USU
                        INNER JOIN 
                          VOTOS ON REGISTROS_VOTOS.ID_VOT_RES = VOTOS.ID_VOT
                        INNER JOIN 
                          PARTIDOS_POLITICOS ON VOTOS.ID_PAR_VOT = PARTIDOS_POLITICOS.ID_PAR";
$result_registros_votos = $connection->query($sql_registros_votos);

// Manejar errores de la consulta de registros de votos
if (!$result_registros_votos) {
    die('Error en la consulta de registros de votos: ' . $connection->error);
}

// Procesar resultados de registros de votos
$registros_votos = array();
if ($result_registros_votos->num_rows > 0) {
    while ($row = $result_registros_votos->fetch_assoc()) {
        $registros_votos[] = array(
            'nombre_usuario' => $row['NOM_USU'],
            'id_voto' => $row['ID_VOT'],
            'partido_politico' => $row['NOM_PAR']
        );
    }
}

// Agregar registros de votos al array de respuesta
$response['registros_votos'] = $registros_votos;

// Consulta de partidos políticos
$sql_partidos = "SELECT 
                    ID_PAR,
                    NOM_PAR,
                    DESC_PAR
                FROM 
                    PARTIDOS_POLITICOS";
$result_partidos = $connection->query($sql_partidos);

// Manejar errores de la consulta de partidos políticos
if (!$result_partidos) {
    die('Error en la consulta de partidos políticos: ' . $connection->error);
}

// Procesar resultados de partidos políticos
$partidos = array();
if ($result_partidos->num_rows > 0) {
    while ($row = $result_partidos->fetch_assoc()) {
        $partidos[] = array(
            'id_partido' => $row['ID_PAR'],
            'nombre_partido' => $row['NOM_PAR'],
            'descripcion' => $row['DESC_PAR']
        );
    }
}

// Agregar partidos políticos al array de respuesta
$response['partidos_politicos'] = $partidos;

// Enviar respuesta JSON
echo json_encode($response);
?>
<?php
// Incluir el archivo de conexión
include("../config/config.php");

// Establecer el encabezado para que el navegador sepa que la respuesta es JSON
header('Content-Type: application/json');

// Verificar si la conexión es exitosa
if (!$connection) {
    echo json_encode(["error" => "Conexión fallida: " . mysqli_connect_error()]);
    exit;
}

// Verificar si el parámetro 'id' está en la URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);  // Asegúrate de que 'id' sea un número entero

    // Consulta SQL para obtener los datos del candidato con el id proporcionado
    $query = "SELECT NOM_CAN, BIOGRAFIA_CAN, EXPERIENCIA_CAN, VISION_CAN, LOGROS_CAN, ID_PAR_CAN FROM CANDIDATOS WHERE ID_CAN = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo json_encode(["error" => "Error en la consulta: " . mysqli_error($connection)]);
        exit;
    }

    // Si se encuentra el candidato, devolver los datos en formato JSON
    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode([
            'name' => $row['NOM_CAN'],
            'bio' => $row['BIOGRAFIA_CAN'],
            'experience' => $row['EXPERIENCIA_CAN'],
            'vision' => $row['VISION_CAN'],
            'achievements' => $row['LOGROS_CAN'],
            'party_id' => $row['ID_PAR_CAN']
        ]);
    } else {
        echo json_encode(["error" => "No se encontró un candidato con ID = $id."]);
    }

} else {
    // Si no se proporciona 'id', devolver todos los candidatos
    $query = "SELECT NOM_CAN, BIOGRAFIA_CAN, EXPERIENCIA_CAN, VISION_CAN, LOGROS_CAN, ID_PAR_CAN FROM CANDIDATOS";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo json_encode(["error" => "Error en la consulta: " . mysqli_error($connection)]);
        exit;
    }

    // Crear un arreglo para almacenar todos los candidatos
    $candidates = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $candidates[] = [
            'name' => $row['NOM_CAN'],
            'bio' => $row['BIOGRAFIA_CAN'],
            'experience' => $row['EXPERIENCIA_CAN'],
            'vision' => $row['VISION_CAN'],
            'achievements' => $row['LOGROS_CAN'],
            'party_id' => $row['ID_PAR_CAN']
        ];
    }

    // Devolver todos los candidatos en formato JSON
    echo json_encode($candidates);

}


// Cerrar la conexión
mysqli_close($connection);

?>

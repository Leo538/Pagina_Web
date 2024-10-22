<?php
// Incluir el archivo de conexión
include("../config/config.php");

// Consulta para obtener todos los candidatos
$query = "SELECT NOM_CAN, BIOGRAFIA_CAN, LOGROS_CAN FROM CANDIDATOS";
$result = $connection->query($query);

// Verificar si hay resultados
$candidates = [];
if ($result->num_rows > 0) {
    // Recorrer todos los resultados y guardarlos en un array
    while ($row = $result->fetch_assoc()) {
        $candidates[] = $row;
    }
} else {
    echo "No se encontraron candidatos.";
}

// Cerrar la conexión
$connection->close();
?>

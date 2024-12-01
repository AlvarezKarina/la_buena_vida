<?php
// Incluye la clase Conexion
require_once 'Conexion.php'; // Asegúrate de que el nombre del archivo sea correcto y esté en la misma carpeta.

$conexion = new Conexion();
$conn = $conexion->getConnection();

if ($conn) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "No se pudo conectar.";
}
?>
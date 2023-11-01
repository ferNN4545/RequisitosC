<?php
include 'index.php';
include 'conexion.php';



$codigo = $_GET['id'];

$sql = "DELETE FROM facultades WHERE codigoFac=$codigo";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado correctamente";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

$conn->close();
?>

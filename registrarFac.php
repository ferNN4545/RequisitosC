<?php
include 'index.php';
include 'conexion.php';


$codigo = $_POST['codigoFac'];
$nombre = $_POST['nombreFac'];


$sql = "INSERT INTO facultades (codigoFac, nombreFac) VALUES ('$codigo', '$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

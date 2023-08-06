<?php

$nombre = $_POST["nombre"];
$especialidad = $_POST["especialidad"];

$servername = "172.31.80.135";
$username = "jbenavides";
$password = "123";
$dbname = "academica";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$sql = "INSERT INTO docentes (nombre, especialidad) VALUES ('$nombre', '$especialidad')";

if ($conn->query($sql) === TRUE) {
    echo "Docente agregado correctamente.";
} else {
    echo "Error al agregar el docente: " . $conn->error;
}

$conn->close();
?>

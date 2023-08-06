<!DOCTYPE html>
<html>
<head>
    <title>Aplicación de Docentes</title>
</head>
<body>
    <h1>Lista de Docentes</h1>
    <?php
    $servername = "172.31.80.135";
    $username = "jbenavides";
    $password = "123";
    $dbname = "academica";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM docentes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>".$row["nombre"]." (Especialidad: ".$row["especialidad"].")</li>";
        }
        echo "</ul>";
    } else {
        echo "No se encontraron docentes.";
    }

    $conn->close();
    ?>
</body>
</html>

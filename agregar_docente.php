<!DOCTYPE html>
<html>
<head>
    <title>Agregar Docente</title>
</head>
<body>
    <h1>Agregar Nuevo Docente</h1>
    <form action="guardar_docente.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="especialidad">Especialidad:</label>
        <input type="text" id="especialidad" name="especialidad" required><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

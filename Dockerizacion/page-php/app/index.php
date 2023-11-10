<!DOCTYPE html>
<html>
<head>
    <title>PHP don Docker</title>
</head>
<body>
    <h1>Registro de Datos Personales</h1>

    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <input type="submit" value="Enviar">
    </form>

    <h2>Registros:</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Correo Electrónico: $email</p>";
    }
    ?>
</body>
</html>
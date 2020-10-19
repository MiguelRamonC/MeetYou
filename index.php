<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <header>
        MeetYou
    </header>
    <form method="POST" action="app/home.php">
        <label for="nombre">Nombre</label><input id="nombre" name="nombre" type="text" required autofocus >
        <label for="apellido">Apellidos</label><input id="apellido" name="apellido" type="text" required >
        <label for="correo">Correo</label><input id="correo" type="email" name="correo" required>
        <label for="edad">Edad</label><input id="edad" type="number" name="edad" required min="18" max="50">
        <label for="ciudad">Ciudad</label><input id="ciudad" name="ciudad" type="text" required>
        <input type="submit" value="Registrarse">
    </form>

    <?php require_once ("include/pie.php"); ?>
</body>
</html>
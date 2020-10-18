<?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $edad = $_POST["edad"];
    $ciudad = $_POST["ciudad"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Home</title>
</head>
<body>
    <div>
        <h1>Datos</h1>
        <h2><?php echo "<span>Nombre: </span> ".$nombre." ".$apellido;?></h2>
        <h2><?php echo "<span>Correo: </span>".$correo;?></h2>
        <h2><?php echo "<span>Edad: </span>".$edad;?></h2>
        <h2><?php echo "<span>Ciudad: </span>".$ciudad;?></h2>
    </div>
</body>
</html>
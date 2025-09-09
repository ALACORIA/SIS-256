<?php 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sexo = $_POST['sexo'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleMostrar.css">
</head>
<body>
    <div id="padre">
        <div id="marco1"><?php echo $nombre?></div>
        <div id="marco2"><?php echo $apellido?></div>
        <div id="marco3"><?php echo $sexo?></div>
        <div id="marco4"><?php echo $direccion?></div>
        <div id="marco5"><?php echo $celular?></div>
        <div id="marco6"><?php echo $correo?></div>
    </div>
</body>
</html>


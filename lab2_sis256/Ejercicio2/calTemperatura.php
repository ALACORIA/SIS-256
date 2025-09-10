<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>
    <?php 
    $temperatura = $_POST['temperatura'];
    $unidad = $_POST['unidad'];

    switch ($unidad) {
        case 'celsius':
            $fahrenheit = ($temperatura * 9/5) + 32;
            $kelvin = $temperatura + 273.15;
            $resultado[0] = $temperatura;
            $resultado[1] = $fahrenheit;
            $resultado[2] = $kelvin;
            break;
        case 'fahrenheit':
            $celsius = ($temperatura - 32) * 5/9;
            $kelvin = ($temperatura - 32) * 5/9 + 273.15;
            $resultado[0] = $celsius;
            $resultado[1] = $temperatura;
            $resultado[2] = $kelvin;
            break;
        case 'kelvin':
            $celsius = $temperatura - 273.15;
            $fahrenheit = ($temperatura - 273.15) * 9/5 + 32;
            $resultado[0] = $celsius;
            $resultado[1] = $fahrenheit;
            $resultado[2] = $temperatura;
            break;
        default:
            echo "<p>Unidad de medida no válida.</p>";
            exit;
    }
    echo "<table>";
            echo "<thead><tr><th>Unidad</th><th>Valor</th></tr></thead>";
            echo "<tbody>";
            foreach ($resultado as $unidad => $valor) {
                echo "<tr><td>$unidad</td><td>$valor</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
    ?>
    
</body>
</html>
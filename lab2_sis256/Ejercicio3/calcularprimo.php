<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos3.css">
</head>
<body>
    <?php 
$cantidad = $_POST['cantidad'];

$primos = [];
$num_actual = 2;

while (count($primos) < $cantidad) {
    $es_primo = true;
            
    if ($num_actual <= 1) {
        $es_primo = false;
    } else {
     for ($i = 2; $i <= sqrt($num_actual); $i++) {
        if ($num_actual % $i == 0) {
            $es_primo = false;
            break;
            }
        }
    }

    if ($es_primo) {
        $primos[] = $num_actual;
    }
    $num_actual++;
}

echo '<div class="resultado">';
        echo '<h2>Los primeros ' . $cantidad . ' números primos son:</h2>';
        echo '<ul>';
        foreach ($primos as $primo) {
            echo '<li>' . $primo . '</li>';
        }
?>
    
</body>
</html>





<?php 
$numero = $_POST['numero'];
$suma = 0;

$cadena = strval($numero);
for ($i = 0; $i < strlen($cadena); $i++) {
            $suma += intval($cadena[$i]);
        }
        echo "<h1>La suma de los dígitos de $numero es: $suma</h1>";
?>
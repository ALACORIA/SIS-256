<?php 
$cadena=$_GET["tareas"];
$palabras = explode(" ", $cadena);

foreach($palabras as $i){
    echo $i;
}
echo "no mames";
?>
<?php 
$con = new mysqli("localhost","root","","elecciones")
if($con->connect_error){
die ("conexion fallida".$con->connect_error)

}

?>
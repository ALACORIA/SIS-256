
<?php 
include("conexion.php")
$sql = "SELECT id,nombres,apellidos,sexo,N_documento from elecciones"
$result = $con->query();


?>
<table>
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Sexo/th>
        <th>Numero documento</th>

    </tr>
    <?php
    while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['id'];  ?></td>
            <td><?php echo $row['nombre'];  ?></td>
            <td><?php echo $row['apellidos'];  ?></td>
            <td><?php echo $row['sexo'];  ?></td>
            <td><?php echo $row['N_documentos'];  ?></td>
        </tr>
        <?php


    } 
    
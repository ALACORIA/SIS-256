
    <?php 
    // Tu código PHP para procesar las tareas
    if (isset($_GET["tareas"])) {
        $cadena = $_GET["tareas"];
        $palabras = explode(" ", $cadena);

        foreach ($palabras as $i) {
            echo $i . "<br>"; // Agregué <br> para que cada palabra aparezca en una nueva línea
        }
    } else {
        echo "Por favor, ingresa algunas tareas.";
    }
    <br>

    echo "no mames";
    ?>

</body>
</html>
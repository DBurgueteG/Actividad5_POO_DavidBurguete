<?php
    include "Empleado.php";
    $empleado = new Empleado("Iñigo", "Alonso", "23-28640415-39");
    $empleadoAdicional = new Empleado("David", "Burguete", "83-19385826-73");

    echo $empleado->mostrar();
    echo "<br>";
    echo $empleadoAdicional->mostrar();
?>
<?php
    include "EmpleadoPlantilla.php";
    include "EmpleadoPorComision.php";
    include "PruebaPolimorf.php";
    $empleadoPlantilla = new EmpleadoPlantilla("Jon", "García", "30-38327317-23", 47, 24);
    $empleadoPlantillaAdicional = new EmpleadoPlantilla("David", "Burguete", "83-19385826-73", 173, 201);
    $empleadoPorComision = new EmpleadoPorComision("Iñigo", "Alonso", "29-64191684-26", 15, 94, 6);
    $empleadoPorComisionAdicional = new EmpleadoPorComision("Alex", "Calderón", "72-12345678-90", 12, 34, 56);

    echo $empleadoPlantilla->mostrar();
    echo $empleadoPlantillaAdicional->mostrar();
    echo $empleadoPorComision->mostrar();
    echo $empleadoPorComisionAdicional->mostrar();
    echo PruebaPolimorf::calcular($empleadoPlantilla);
?>
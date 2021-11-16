<?php
    include "EmpleadoPlantilla.php";
    $empleadoPlantilla = new EmpleadoPlantilla("Jon", "García", "30-38327317-23", 47, 24);
    $empleadoPlantillaAdicional = new EmpleadoPlantilla("David", "Burguete", "83-19385826-73", 173, 201);


    echo $empleadoPlantilla->mostrar();
    echo $empleadoPlantillaAdicional->mostrar();
?>
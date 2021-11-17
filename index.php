<?php
    include "EmpleadoPlantilla.php";
    include "EmpleadoPorComision.php";
    include "PruebaPolimorf.php";
    include "Empresa.php";
    $empleadoPlantilla = new EmpleadoPlantilla("Jon", "García", "30-38327317-23", 47, 24);
    $empleadoPlantillaAdicional = new EmpleadoPlantilla("David", "Burguete", "83-19385826-73", 173, 201);
    $empleadoPorComision = new EmpleadoPorComision("Iñigo", "Alonso", "29-64191684-26", 15, 94, 6);
    $empleadoPorComisionAdicional = new EmpleadoPorComision("Alex", "Calderón", "72-12345678-90", 12, 34, 56);
    $empresa = new Empresa();
    $empresa->addEmpleado($empleadoPlantillaAdicional);
    $empresa->addEmpleado($empleadoPorComision);
    $empresa->addEmpleado($empleadoPlantilla);

    echo "<p><b>Empleado:</b></p><br><br><br>";
    echo "<p><b>EmpleadoAsalariado:</b></p>";
    echo $empleadoPlantilla->mostrar();
    echo $empleadoPlantillaAdicional->mostrar();
    echo "<br><p><b>EmpleadoPorComision:</b></p>";
    echo $empleadoPorComision->mostrar();
    echo $empleadoPorComisionAdicional->mostrar();
    echo "<br><p><b>Prueba Polimorfismo:</b></p>";
    echo PruebaPolimorf::calcular($empleadoPlantilla);
    echo "<br><p><b>Listado Empresa:</b></p>";
    echo $empresa->listarEmpleados() . "<br><br><br>";
    echo $empresa->sumaIngresos();
?>
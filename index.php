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

    $resultado = "";
    $resultado .= "<p><b>Empleado:</b></p><br><br><br>";
    $resultado .= "<p><b>EmpleadoAsalariado:</b></p>";
    $resultado .= $empleadoPlantilla->mostrar();
    $resultado .= $empleadoPlantillaAdicional->mostrar();
    $resultado .= "<br><p><b>EmpleadoPorComision:</b></p>";
    $resultado .= $empleadoPorComision->mostrar();
    $resultado .= $empleadoPorComisionAdicional->mostrar();
    $resultado .= "<br><p><b>Prueba Polimorfismo:</b></p>";
    $resultado .= PruebaPolimorf::calcular($empleadoPlantilla);
    $resultado .= "<br><p><b>Listado Empresa:</b></p>";
    $resultado .= $empresa->listarEmpleados() . "<br><br><br>";
    $resultado .= $empresa->sumaIngresos();

    include "includes/vista_resultado.php";
?>
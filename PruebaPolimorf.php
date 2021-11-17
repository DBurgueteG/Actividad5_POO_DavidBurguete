<?php
    class PruebaPolimorf{
        static function calcular($emp){
            return $emp instanceof Empleado ? "<p>Los ingresos de " . $emp->getNombre() . " son " . $emp->ingresos() . "</p>" : "<p>Se ha producido un error</p>";
        }
    }
?>
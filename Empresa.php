<?php
    class Empresa{
        private $empresa = Array();

        public function addEmpleado(Empleado $emp){
            array_push($this->empresa, $emp);
        }

        public function listarEmpleados(){
            $resultado = "";
            foreach ($this->empresa as $value){ 
                $resultado .= $value->mostrar() . "<br>";
            }
            return $resultado;
        }

        public function sumaIngresos(){
            $resultado = 0;
            foreach ($this->empresa as $value){ 
                $resultado += $value->ingresos();
            }
            return "<p><b>La suma total de ingresos es: </b>" . $resultado . "</p><br>";
        }
    }
?>
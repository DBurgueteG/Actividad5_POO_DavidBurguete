<?php
    include "Empleado.php";
    class EmpleadoPlantilla extends Empleado{
        private $sueldo;
        private $dietas;

        function __construct($nombre, $apellido, $numeroSS, $sueldo, $dietas){
            parent::__construct($nombre, $apellido, $numeroSS);
            $this->sueldo = $sueldo;
            $this->dietas = $dietas;
        }

        public function getSueldo(){
                return $this->sueldo;
        }

        public function setSueldo($sueldo){
                $this->sueldo = $sueldo;
        }

        public function getDietas(){
                return $this->dietas;
        }

        public function setDietas($dietas){
                $this->dietas = $dietas;
        }

        public function mostrar(){
            return parent::mostrar() . "<p>Los ingresos " . ($this->ingresos()) . "</p>";
        }

        public function ingresos(){
            return $this->sueldo + $this->dietas;
        }
    }
?>
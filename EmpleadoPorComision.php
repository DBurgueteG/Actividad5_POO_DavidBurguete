<?php
    include_once "Empleado.php";
    class EmpleadoPorComision extends Empleado{
        private $horas;
        private $tarifa;
        private $base;

        function __construct($nombre, $apellido, $numeroSS, $horas, $tarifa, $base){
            parent::__construct($nombre, $apellido, $numeroSS);
            $this->horas = $horas;
            $this->tarifa = $tarifa;
            $this->base = $base;
        }

        public function getHoras(){
                return $this->horas;
        }

        public function setHoras($horas){
                $this->horas = $horas;
        }

        public function getTarifa(){
                return $this->tarifa;
        }

        public function setTarifa($tarifa){
                $this->tarifa = $tarifa;
        }

        public function getBase(){
                return $this->base;
        }
 
        public function setBase($base){
                $this->base = $base;
        }

        public function mostrar(){
            return parent::mostrar() . "<p>Los ingresos " . $this->ingresos() . "</p>";
        }

        public function ingresos(){
            return $this->base + $this->horas + $this->tarifa;
        }
    }
?>
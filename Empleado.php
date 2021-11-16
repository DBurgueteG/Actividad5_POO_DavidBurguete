<?php 
    abstract class Empleado{
        private $nombre;
        private $apellido;
        private $numeroSeguridadSocial;

        function __construct($nombre, $apellido, $numeroSeguridadSocial){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->numeroSeguridadSocial = $numeroSeguridadSocial;
        }

        public function getNombre(){
                return $this->nombre;
        }

        public function setNombre($nombre){
                $this->nombre = $nombre;
        }

        public function getApellido(){
                return $this->apellido;
        }

        public function setApellido($apellido){
                $this->apellido = $apellido;
        }

        public function getNumeroSeguridadSocial(){
                return $this->numeroSeguridadSocial;
        }

        public function setNumeroSeguridadSocial($numeroSeguridadSocial){
                $this->numeroSeguridadSocial = $numeroSeguridadSocial;
        }

        public function mostrar(){
            return "<p>Esta empleado " . $this->nombre . " " . $this->apellido . " con el NSS: " . $this->numeroSeguridadSocial . "</p>";
        }

        public abstract function ingresos();
    }
?>
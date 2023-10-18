<?php
    include_once 'Producto.php';

    class Juego extends Producto {
        private $plataforma;

        public function __construct($id, $name, $tipo, $genero) {
            parent::__construct($id, $name, $tipo);
            $this->plataforma = $plataforma;
        }

        /**
         * Get the value of plataforma
         */ 
        public function getPlataforma()
        {
                return $this->plataforma;
        }

        /**
         * Set the value of plataforma
         *
         * @return  self
         */ 
        public function setPlataforma($plataforma)
        {
                $this->plataforma = $plataforma;

                return $this;
        }
    }
?>
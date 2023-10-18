<?php
    include_once 'Producto.php';

    class Peli extends Producto {

        public function __construct($id, $name, $tipo) {
            parent::__construct($id, $name, $tipo);

        }

        public function calculaPrecioTotal($numDias) {
            $precioTotal = $numDias*self::precioPeli;
            return $precioTotal;
        }
        public function devuelvePrecioDia() {
            return self::precioJuego;
        }
        
    }
?>
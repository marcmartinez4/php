<?php
    include_once 'modelo/ProductoDAO.php';
    
    //Crearemos el controlador de pedidos.
    class productoControlador{
        public function index(){
            //Cabecera

            //Panel
            
            var_dump(ProductoDAO::getAllProductos());
            /**$p1 = new Peli(0, 'Avatar', 'Peli', 'Aventuras');
            $p2 = new Peli(1, 'GTA', 'Juego', 'Acción', 'PS4');

            $listaProductos = [$p1, $p2];

            var_dump($listaProductos);
            foreach($listaProductos as $producto) {
                echo $producto->getName();
            }*/
            
            //echo 'Lista de productos';
            
            //Footer
        }
        public function compra(){
            echo 'Pagina de compra.';
        }
    }
?>
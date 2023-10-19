<?php
    include_once 'model/Producto.php';
    include_once 'config/dataBase.php';
    
    class ProductoDAO {
        public static function getAllProducts() {

            $con = dataBase::connect();

            if($result = $con->query("SELECT * FROM producto WHERE tipo ")) {

                while($producto = $result->fetch_array('Producto')) {

                    var_dump($procuto);
                    /*echo $producto['name']->getName();
                    echo '<br>';*/
                }
            }
            /*$stmt = $con ->prepare("SELECT * FROM producto");
            $stmt->execute();
            var_dump($stmt->get_result());
            */
        }
    }
?>
<?php
    include_once 'config/dataBase.php';
    
    class ProductoDAO {
        public static function getAllProducts() {
            $con = dataBase::connect();
            if($result = $con->query("SELECT * FROM product")) {
                while($producto = $result->fetch_array()) {
                    echo $producto['name']->getName();
                    echo '<br>';
                }
            }
            /*$stmt = $con ->prepare("SELECT * FROM producto");
            $stmt->execute();
            var_dump($stmt->get_result());
            */
        }
    }


?>
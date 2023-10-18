<?php

    include_once 'config/dataBase.php';
    class ProductoDAO {
        public static function getAllProducts() {
            $con = dataBase::connect();
        }
    }


?>
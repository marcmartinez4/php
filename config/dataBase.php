<?php
    class dataBase {
        public static function connect($host='localhost', $user='root', $pwd='', $db='videoclub') {
            $con = new mysqli($host, $user, $pwd, $db);
            if($con == false) {
                die('DATABASE ERROR!');
            } else  {
                return $con;
            }
        }
    }
?>
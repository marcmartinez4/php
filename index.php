<?php
/*
    if(isset($_GET['controlador'])) {
        echo 'Quieres realizar una acción sobre '.$_GET['controller'];
        if(isset($_GET['action'])) {
            echo 'Sobre '.$_GET['controlador']. ' quieres mostrar la pagina '.$_GET['action'];
        }
    } else {
        echo 'No me has pasado controller.';
    }
*/
    include_once 'controlador/pedidoControlador.php';
    
    if(isset($_GET['controlador'])){
        //Si no pasa nada se mostrará pagina principal pedidos.
    } else {
        $nombre_controlador = $_GET['controlador'].'controlador';

        if(class_exists($nombre_controlador)){
            $controlador = new $nombre_controlador(); 
            
            //Miramos si nos pasa una acción, en caso contrario mostraremos acción por defecto.
            
            if(isset($_GET['action'])){
                $action = $_GET['action'];
            }
            //echo 'Quieres visualizar una acción de '.$nombre_controlador;
        } else {
            $action = 'index';
            //echo $nombre_controlador.' no existe.';
        }
        
        $controlador->$action();
    }
?>
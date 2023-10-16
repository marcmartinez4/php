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
    include_once 'config/parametros.php';

    if(isset($_GET['controlador'])){
        //Si no pasa nada se mostrará pagina principal pedidos.
        header('Location: '.url.'?controlador=pedido');
    } else {
        $nombre_controlador = $_GET['controlador'].'controlador';

        if(class_exists($nombre_controlador)){
            //Miramos si nos pasa una acción, en caso contrario mostraremos acción por defecto.
            $controlador = new $nombre_controlador();

            if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
                $action = $_GET['action'];
            } else {
                $action = action_default;
            }

            $controlador->$action();
        } else {
            //Si no existe vamos al header.
            header('Location: '.url.'?controlador=pedido');
        }

    }
?>
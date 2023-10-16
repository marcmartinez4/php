<?php
    if(isset($_GET['controlador'])) {
        echo 'Quieres realizar una acción sobre '.$_GET['controller'];
        if(isset($_GET['action'])) {
            echo 'Sobre '.$_GET['controlador']. 'quieres mostrar la pagina '.$_GET['action'];
        }
    } else {
        echo 'No me has pasado controller.';
    }

?>
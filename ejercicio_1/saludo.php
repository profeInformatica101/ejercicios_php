<?php
 //   var_dump($_GET);
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];

    echo "Hola " . htmlspecialchars( $nombre) . " " . htmlspecialchars($apellido);
?>
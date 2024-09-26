<?php

$distancia = $_POST['distancia'];
$velocidad = $_POST['velocidad'];

if(isset($distancia) && isset($distancia)){

    if(is_numeric($distancia) && is_numeric($velocidad)) {
            $tiempo = $distancia / $velocidad;
            echo "El tiempo estimado es " . $tiempo . " horas";
    }else{
        echo "No es un número";
    }

}


?>
<br>
<a href="tiempo.html">Atrás</a>
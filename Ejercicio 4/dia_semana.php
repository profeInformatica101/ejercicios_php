<?php
//var_dump($_GET);

$dia = $_GET['dia'];

switch ($dia) {

    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
        case 6:
            echo "Sábado";
            break;
            case 7:
                echo "Viernes";
                break;
                default:
                echo "No es un día de la semana";
 }
?>
<br>
<a href="dia_semana.html">Volver</a>
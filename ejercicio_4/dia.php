<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Día de la semana</h1>


<?php
//var_dump($_SERVER);
include_once('funciones.php');
if(isset($_GET['dia'])){
    $dia_semana = $_GET['dia'];
    $dia = transformar_dia($dia_semana);
    echo "<h2 style='color:green'>$dia</h2>";
}

echo CONSTANTE_1 . " " .  CONSTANTE_2;
?>

<form action="dia.php" method="get">
    <label for="dia">Día: </label>
    <input type="number" name="dia">
    <input type="submit" value="Enviar">
</form>


</body>
</html>


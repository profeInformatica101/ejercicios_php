<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Numero: <input type="number" name="numero" id="">
        <input type="submit" value="enviar">
    </form>

    <?php
/**
 * Enunciado: Diseña un formulario que pida al usuario un número N. 
 * l enviar el formulario, 
 * el programa debe calcular y mostrar la suma de todos 
 * los números desde 1 hasta N.
 */
//var_dump($_GET);
if(isset($_GET["numero"])){
    $n = $_GET["numero"];
    $resultado = 0;
    for ($i = 1; $i <=  $n; $i++) {
        $resultado += $i;
    }

}
echo "<h2>$resultado</h2>";


?>
</body>
</html>


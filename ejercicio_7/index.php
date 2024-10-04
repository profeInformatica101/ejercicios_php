<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<!--
Enunciado: Crea un formulario que solicite al usuario un número entre 1 y 10. Al enviar el formulario, 
el programa debe mostrar la tabla de multiplicar de ese número.-->
<body>


    <h1>Tabla de Multiplicar</h1>
    <form action="" method="get">
        <input type="number" name="numero" min='0' max='10' >
        <input type="submit" value="Enviar">
    </form>
    <?php
      //  var_dump($_GET);
        if(isset($_GET["numero"])){
            if(is_numeric($_GET["numero"])){
                $num = $_GET["numero"];
                echo "<table>";
                for($i=1; $i<=10; $i++){
                    $mult = $num * $i;
                    echo "<tr>";
                    echo "<td>$i</td><td>x</td><td>$num</td><td>=</td><td>$mult</td>";
                    echo "</tr>";


                }
                echo "</table>";

            }
    

        }
    
        
    ?>
</body>
</html>
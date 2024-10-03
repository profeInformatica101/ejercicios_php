<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El mayor de 3 números</title>
</head>
<body>
<?php
$numero1=$_GET['num1'];
$numero2=$_GET['num2'];
$numero3=$_GET['num3'];

if(isset($numero1) && isset($numero2) && isset($numero3)){
    if(is_numeric($numero1) && is_numeric($numero2) && is_numeric($numero3)){
          $maximo =  max($numero1, $numero2, $numero3);
       
         echo  "<h1 style='color:red;'> El máximo es $maximo</h1>" ;

    }else{
        print("Por favor, tienen que ser números");
    }

}

?>


    <h1>El mayor de 3 número</h1>

    <form action="elmayordetres.php" method="get">
    <label for="num1">Numero 1: </label>    
    <input type="number" name="num1">
<br>
<label for="num1">Numero 2: </label>    
    <input type="number" name="num2">
<br>
<label for="num1">Numero 3: </label>    
    <input type="number" name="num3">
<br>
<input type="submit" value="Enviar">
    </form>

</html>
<?php
// tabla_multiplicar.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    // Validamos que el número esté entre 1 y 10
    if (is_numeric($numero) && $numero >= 1 && $numero <= 10) {
        echo "<h2>Tabla de multiplicar del $numero</h2>";
        echo "<table>";
        // Usamos un bucle for para generar la tabla de multiplicar
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i = $resultado </td></tr>";
        }
        echo "</table>";
    } else {
        echo "Por favor, introduce un número válido entre 1 y 10.";
    }
}
?>
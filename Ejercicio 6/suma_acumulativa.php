<?php
// suma_acumulativa.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    // Validar que el número sea positivo y mayor que 0
    if (is_numeric($numero) && $numero > 0) {
        $suma = 0;

        // Usamos un bucle for para calcular la suma
        for ($i = 1; $i <= $numero; $i++) {
            $suma += $i;
        }

        echo "La suma de todos los números de 1 hasta $numero es: $suma";
    } else {
        echo "Por favor, introduce un número válido mayor que 0.";
    }
}
?>
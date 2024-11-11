<?php
function sumaPares($arr) {
    $suma = 0;
    foreach ($arr as $num) {
        if ($num % 2 == 0) {
            $suma += $num;
        }
    }
    return $suma;
}

// Probando funcion
$numeros = [1, 2, 3, 4, 5, 6, 12, 2];
echo "La suma de los números pares es: " . sumaPares($numeros);
?>

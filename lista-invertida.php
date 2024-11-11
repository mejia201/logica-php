<?php
function invertirArray($arr) {
    return array_reverse($arr);
}

// Probando funcion
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numerosInvertidos = invertirArray($numeros);
print_r($numerosInvertidos);
?>

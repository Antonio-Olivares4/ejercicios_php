<?php
$n = $_GET['numero'];

echo "Tabla de multiplicar del $n:<br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $n * $i;
    echo "$n x $i = $resultado<br>";
}


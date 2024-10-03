<?php
$n = $_GET["numero"];

$suma=0;

for ($i=0; $i < $n ; $i++) { 
    $suma += $i;
}

echo "La suma de los numeros de 1 hasta $n es $suma";


?>
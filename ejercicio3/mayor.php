<?php

$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$num3 = $_GET['n3'];

if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1 es el mayor de los tres.";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "$num2 es el mayor de los tres.";
} else {
    echo "$num3 es el mayor de los tres.";
}

?>

<?php
$edad = $_GET["edad"];

if ($edad <12) {
    echo "Eres infante.";
} elseif ($edad >=12 && $edad <=17) {
        echo "Eres adolescente.";
} elseif ($edad >=18 && $edad <=60) {
    echo "Eres adulto.";

} else{
    echo "eres anciano.";
}


?>
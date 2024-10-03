<?php
$distancia = $_GET['distancia'];
$velocidad = $_GET['velocidad'];
$tiempo= $distancia/$velocidad;

echo "se tarda $tiempo horas en hacer el viaje.";
?>
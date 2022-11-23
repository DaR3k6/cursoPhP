<?php

$_numero1 = $_POST['numero1'];

$_numero2 = $_POST['numero2'];

$_area = 2*pi()*$_numero1*$_numero2 + 2 *pi()+ pow($_numero1,2);
$_volumen = pi()*pow($_numero1,2) * $_numero2;

echo "El area total del cilindro es:{$_area} <br>";
echo "El volumen del cilindro es: {$_volumen}";



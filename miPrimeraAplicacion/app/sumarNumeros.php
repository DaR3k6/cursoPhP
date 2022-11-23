<?php
//Recibimos la data de la interfaz (El formulario)

$_numero1 = $_POST['numero1'];
$_numero2 = $_POST['numero2'];
$_numero3 = $_POST['numero3'];
//Hacemos la opearcion
$_resultado = $_numero1 + $_numero2 + $_numero3;
//Renderizar el resultado en el navegador
echo "LA SUMA DE LOS 3 NUMEROS INGRESADO ES:{$_resultado}";
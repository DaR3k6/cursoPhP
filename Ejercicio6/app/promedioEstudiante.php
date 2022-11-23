<?php
$estudiante1 = $_POST['numero1'];
$estudiante2 = $_POST['numero2'];
$estudiante3 = $_POST['numero3'];
$estudiante4 = $_POST['numero4'];
$estudiante5 = $_POST['numero5'];
$estudiante6 = $_POST['numero6'];

$promedio = ($estudiante1 + $estudiante2 + $estudiante3 + $estudiante4 +$estudiante5 +$estudiante6)/ 6;
echo "El promedio de los estudiantes es: {$promedio}";




<?php

$_a = 18;
$_b = 12;
//Estilo Clasico
/* if ($_a > $_b) {
    //Literal expresion
    echo "El valor {$_a} es mayor que {$_b} <br>";
    //modo CLasico
    echo "El valor" . $_a . "es mayor que" . $_b;
}
 */
echo '<br>';
//operardor Alternario

//echo ($_a > $_b) ? "El valor {$_a} es mayor que {$_b} <br>" : "El valor es menor";

$_resultado = ($_a > $_b) ? true : false;

if ($_resultado) {
    echo 'Excelente !!';
}
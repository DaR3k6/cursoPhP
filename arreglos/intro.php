<?php

$frutas = ["papaya", 9, true, 5.23];

//var_dump($frutas);
//echo '<br>';
//print_r($frutas);
//echo '<br>';
//echo $frutas; // no funciona porque es un arreglo
/* 
echo "<pre>";
var_dump($frutas);
echo "</pre>"; */

//recorrer arregla forma 1: ciclo for
/* for ($i=0; $i < count($frutas); $i++) { 
   echo $frutas[$i].'<br>';
} */

echo '<br>';
//recorro arreglo con foreach 
foreach ($frutas as $llave => $valor) {
    echo $llave . '==>' . $valor . '<br>';

}

echo '<br>';
echo $frutas [3];
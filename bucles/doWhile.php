<?php

//Inicializar variables
$bandera =  5; //variable que controla el bucle 
$contador =  0; //variable que hace girar el bucle

//definicion del bucle
do{
    echo "El numero del ciclo/vuelta : {$contador}<br>";
    $contador++; 
}while ($contador <= $bandera); 

<?php
//Usa el archivo de conexion dentro de este codigo
require_once 'conexion.php';

//armados la consulta
$sql = 'SELECT * FROM contacto';

//prepare: prepara la consulta oara ejecutarse, limpia caracteres y previene sql injection
$query=$pdo->prepare($sql);
$query->execute(); //ejecuta la consulta SQL en la BD
$resultado = $query->fetchAll(); //transforma un resultado de la consulta en un arreglo asociativo


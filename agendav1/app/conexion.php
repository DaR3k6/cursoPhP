<?php

/**
 * codfigo de conexion a la base de datos usamos la super clase pdo 
 * PHP DATA OBJECTS
 * PDO: es una clase nativa de php que me permite conectarme
 * con cualquier base de datos
 * 
 * https://www.php.net/manual/en/pdo.connections.php
 */

 $usuario = 'root';
 $password = '';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=agenda',$usuario,$password);
    //var_dump($pdo);
    
} catch (PDOException $error) {
    echo 'Error en la conexion'.$error->getMessage();
}






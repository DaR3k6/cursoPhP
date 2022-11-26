<?php

//datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
//conexion

require_once 'conexion.php';

//consulta
$sql = 'INSERT INTO contacto (nombre,apellido,email,telefono) VALUES(?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$nombre,$apellido,$email,$telefono]);
//llama a la pagina principal -> llama la interfaz
// https://www.php.net/manual/en/function.header.php

header('Location:../index.php');
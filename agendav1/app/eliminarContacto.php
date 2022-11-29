<?php

//datos del formulario
$id = $_GET['id'];
//conexion
require_once 'conexion.php';

//consulta
$sql = "DELETE  FROM contacto WHERE id={$id}";
$query = $pdo->prepare($sql);
$query->execute();
//llama a la pagina principal -> llama la interfaz
// https://www.php.net/manual/en/function.header.php
header('Location:../index.php');

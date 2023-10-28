<?php

//Importar conexion
require 'includes/app.php';
$db = conectarDB();

//Crear email y un password
$email = 'correo@correo.com';
$password = '123456';
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//Query para crear el usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}')";

//Agregar datos a bd
$resultado = mysqli_query($db, $query);
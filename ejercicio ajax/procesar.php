<?php

$servidor = "localhost"; 
$usuario = "root"; 
$password = ""; 
$baseDatos = "tarache12"; 

$conexion = mysqli_connect($servidor, $usuario, $password, $baseDatos);

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

if (isset($_POST['documento']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['fecha_nacimiento'])) {
    $documento = trim($_POST['documento']);
    $nombres = trim($_POST['nombres']);
    $apellidos = trim($_POST['apellidos']);
    $fechaNacimiento = $_POST['fecha_nacimiento'];

    // Validar datos de forma más específica si es necesario
    // ...

    $sql = "INSERT INTO tb_usuarios (documento, nombres, apellidos, fecha_nacimiento) VALUES ('$documento', '$nombres', '$apellidos', '$fechaNacimiento')";

    if (mysqli_query($conexion, $sql)) {
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }
} else {
    echo "Error: No se recibieron todos los datos del formulario.";
}

mysqli_close($conexion);

?>

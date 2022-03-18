<?php

include_once 'conexion.php';
$consulta = "SELECT * FROM usuarios";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$nickName = $_POST["nickname__register"];
$correoElectronico = $_POST["gmail__register"];
$clave = password_hash($_POST["clave__register"],PASSWORD_BCRYPT);

$insertar_user = "INSERT INTO usuarios(nombre,apellido,nickname,correo_electronico,clave) values ('$nombre','$apellido','$nickName','$correoElectronico','$clave')";
$resultado = mysqli_query($conexion,$insertar_user);

echo "<script>window.location = '../Indexs/iniciar_s.html'</script>";

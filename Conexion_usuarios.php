<?php
$conexion = mysqli_connect('Localhost','root','','easyshop')
or die (mysqli_error($mysql));
function diferencia($conexion){
	if(isset($_POST['Registrar'])){
		insertar($conexion);
	}
}
function insertar($conexion){
	$nombre = $_POST['nombre'];
	$contraseña=$_POST['contraseña'];
	$correoelectronico=$_POST['correo electronico'];

	$consulta = "INSERT INTO usuarios (nombre,contraseña,correo_electronico)
	VALUES  ('$nombre','$contraseña','$correoelectronico')";
	mysqli_query($conexion,$consulta);
	mysqli_close($conexion);
}
?>
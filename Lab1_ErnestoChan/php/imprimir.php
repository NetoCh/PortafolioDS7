<?php

include ('conexion.php');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$fecha=$_POST['fechaNacimiento'];
$sexo=$_POST['sexo'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$institucion=$_POST['int'];
$especialidad=$_POST['esp'];


echo "<br>Hola $nombre $apellido buenos días";
echo "<br> Hemos recibido su información, pronto le enviaremos un email a $email";
echo "<br>";

echo '<a href="http://localhost/Lab1_ErnestoChan/"> Ingresar otro dato </a>';




$sql = "INSERT INTO usuarios (nombre, apellido, cedula, sexo, fecha, direccion, email, telefono, institucion, especialidad) 
VALUES ('$nombre', '$apellido','$cedula', '$sexo', '$fecha', '$direccion', '$email' ,'$telefono, '$institucion', '$especialidad')";
mysqli_query($connection, $sql);



?>
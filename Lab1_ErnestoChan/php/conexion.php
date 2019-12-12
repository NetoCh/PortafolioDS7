<?php

// Conexión con los datos mysqli_connect('host','usuario','password','dbname')
$connection = mysqli_connect('localhost','root','','datos'); 

// Si la conexión falla, aparece el error 
	if($connection === false) { 
	echo 'Ha habido un error <br>'.mysqli_connect_error(); 
	} else {
	echo 'Conectado a la base de datos';
	}
?>
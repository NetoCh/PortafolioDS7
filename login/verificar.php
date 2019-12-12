<?php
//Iniciar la sesión 
session_start(); 
// verifica la sesión

$user =$_POST['user'];
$pass =md5($_POST['password']);

//Establezco la conexion
$acceso = True; //Activo la variable para poder acceder al include.
include 'conexion.php';

/*
$sql = "SELECT usuario, contra, fotoUrl FROM usuarios where usuario='$user' and contra='$pass'";
$result = mysqli_query($connection, $sql); //Ejecuto el query para buscar el usuario con la contraseña determinada.
*/

// PDO
$query = $conexion->prepare("SELECT usuario, contra, fotoUrl FROM usuarios where usuario='$user' and contra='$pass'");
$query->setFetchMode(PDO :: FETCH_ASSOC);
$query->execute();
$resultado = $query->fetch();

if ($resultado['usuario'] == $user && $resultado['contra'] == $pass) {//Verifico si hay algun registro de la consulta.
//	while ($row = mysqli_fetch_assoc($result)) {
		$_SESSION["sw"] = 1; 
        $_SESSION["user"] = $user; 
        $_SESSION["foto"] = $resultado["fotoUrl"];
        header('Location: panel.php');
	//}
        
} else {//En caso de no haber un registro del usuario se regresa a la pagina de inicio index.php
    echo "<script>alert('Usuario o Contraseña incorrecto.'); window.location='index.php';</script>";

}
$connection->close();

?>

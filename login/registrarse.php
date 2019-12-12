<?php 	

session_start(); 
// verifica si la sesion existe

        //Controles
		$user = $_POST['correo'];
		$pass = md5($_POST['contra']);
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];

		// Inicio del fileUpload
		$target_dir = "img/fotos/";
		$target_file = $target_dir . $user .basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}

		//fin del fileUpload

		//Conexion con la base de datos
		$acceso = true;
		include 'conexion.php';
		try{
			/*$sql = "INSERT INTO usuarios (usuario,contra,nombre,apellido,fotoUrl) values ('$user','$pass','$nombre','$apellido', '$target_file')";*/
			//nuevo
			$insertar = $conexion->prepare("INSERT INTO usuarios (usuario,contra,nombre,apellido,fotoUrl) values ('$user','$pass','$nombre','$apellido', '$target_file')");
			$insertar->bindParam(':nombre', $nombre);
			$insertar->bindParam(':apellido', $apellido);
			$insertar->bindParam(':usuario', $user);
			$insertar->bindParam(':fotoUrl', $target_file);
			$insertar->bindParam(':contra', $pass);
			//ejecutando la inserición
			$insertar->execute();
			$_SESSION["sw"] = 1; 
		    $_SESSION["user"] = $nombre." ".$apellido;
		    $_SESSION["foto"] = $target_file;
		    // Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			  echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			        echo "<script>alert('Registro de usuario exitoso.'); window.location='panel.php';</script>";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }

			//fin del nuevo
			/*
			if(mysqli_query($connection, $sql)){
				$_SESSION["sw"] = 1; 
		        $_SESSION["user"] = $nombre." ".$apellido;
		        $_SESSION["foto"] = $target_file;
		        // Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				} 
		      	echo "<script>alert('Registro de usuario exitoso.'); window.location='panel.php';</script>";
		      }
		      else{
		      	echo "<script>alert('Registro de usuario fallido.'); window.location='registrar.php';</script>";
		      }*/

			}
		 }
		catch(Exception $e)
		{
			echo "<script>alert('$e'); window.location='registrar.php';</script>";
		}
?>

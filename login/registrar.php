<!DOCTYPE html>
<html>
<head>
	<title>	Registrarse</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<header>
		<h2 class="border-bottom">Formulario de registro</h2>
		</header>
	</div>
	
	<div class="container">
		<form action="registrarse.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<div class="input-group mb-3">
					<div class="input-group-prepend"><span class="input-group-text">Nombre y Apellido</span></div>
					<input type="text" name="nombre" class="form-control" placeholder=" Nombre" required>
					<input type="text" name="apellido" class="form-control" placeholder=" Apellido" required>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Correo</span>
					</div>
					<input type="email" class="form-control" name="correo" required>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Contraseña</span>
					</div>
					<input type="password" class="form-control"	name="contra" required>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Foto</span>
					</div>
					<div class="custom-file">
						<input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input" id="inputFoto" required>
						<label class="custom-file-label" for="inputFotos">Elegir archivo</label>
					</div>
				</div>
				<button type="submit" class="btn btn-dark">Registrarse</button>
				<button class="btn btn-danger"><a class="text-decoration-none text-white" href="index.php">Cancelar</button>
			</div>
		</form>
		
	</div>
	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
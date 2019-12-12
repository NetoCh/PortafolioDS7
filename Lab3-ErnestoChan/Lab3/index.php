<!-- 
Ernesto Chan
8-935-2285
1LS131
-->
<!DOCTYPE html>
<html>
<head>
	<title>Laboratorio 3</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
	<form action="paginas/resultados.php" method="POST" >
	<br>
	<div class="text-center mb-4">
		<h1 class="h3 mb-3 font-weight-normal">Calculo Salarial</h1>
	</div>

	<div class="form-label-group">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" class="form-control"  required>
	<br>
	</div>

	<div class="form-label-group">
	<label for="apellido">Apellido</label>
	<input type="text" name="apellido" class="form-control"  required>
	<br>
	</div>

	<div class="form-label-group">
	<label for="cedula">Cédula</label>
	<input type="text" name="cedula" class="form-control"  required>
	<br>
	</div>

	<div class="form-label-group">
	<label for="pago">Pago por hora</label>
	<input type="number" name="pago" class="form-control" step="0.01" min="0.01" required>
	<br>
	</div>

	<div class="form-label-group">
	<label for="horas">Cantidad de horas semanal</label>
	<input type="number" name="hora" class="form-control" min="1"  required>
	<br>
	</div>
	<br>

	<button type="Submit" class="btn btn-lg btn-primary btn-block"> Calcular </button>
	</form>
	</div>

</body>
</html>
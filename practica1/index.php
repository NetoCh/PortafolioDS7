<!DOCTYPE html>
<html>
<head>
	<title>Provincia</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
<img src="imagenes/panama.png" style="width: 100%">
<h1>Seleccione una Provincia</h1>
	<form method="POST" action="paginas/pagina.php">
		<div class="col-sm-2">
		<select name="provincia" id="provincia" class="form-control">
			<option value="1">Bocas del Toro</option>
			<option value="2">Cocle</option>
			<option value="3">Colon</option>
			<option value="4">Chiriqui</option>
			<option value="5">Darien</option>
			<option value="6">Herrera</option>
			<option value="7">Los Santos</option>
			<option value="8">Panama</option>
			<option value="9">Veraguas</option>
			<option value="10">Guna Yala</option>
			<option value="11">Embera-Wounan</option>
			<option value="12">Ngable-Bugle</option>
			<option value="13">Panama Oeste</option>
		</select>
	</div>
		<button type="submit" class="btn btn-default">Buscar</button>
	</form>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
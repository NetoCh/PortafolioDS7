<?php  
	//Lab3 - Ernesto Chan 8-935-2285 1LS131


	//Variables que contienen los valores del formulario.
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$cedula = $_POST['cedula'];
	$pago = $_POST['pago'];
	$hora = $_POST['hora'];

	//Calculo de pago: semanal, mensual y anual
	$pagoSemanal= $pago*$hora;
	$pagoMensual = $pagoSemanal*4;
	$pagoAnual = $pagoMensual*13;

	//Calculo de Seguro Social
	$seguroSocial = $pagoMensual*0.0975;

	//Calculo de seguro Educativo
	$seguroEducativo = $pagoMensual*0.0125;

	//Calculo del impuesto sobre la renta segun su salario anual
	if($pagoAnual>50000)
	{
		$impuestoRenta = (($pagoAnual-50000)*0.25)/12;
	}
	elseif ($pagoAnual>11000) 
	{
		$impuestoRenta = (($pagoAnual-11000)*0.15)/12;
	}
	else
	{
		$impuestoRenta = 0;
	}

	//Calculo del total de deducciones
	$totalDedu = $seguroSocial+$seguroEducativo+$impuestoRenta;

	//Inicio del html
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultados del Calculo Salarial</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<div class="container">
	<br>
	<h1>Calculo Salarial</h1>

	<table class="table table-hover">
		<tr>
		<th colspan=2 class="centro"><?php echo $nombre.' '.$apellido.'<br>('.$cedula.')'; ?></th>
		</tr>
		<tr>
			<td class="centro">Pago por hora</td>
			<td class="centro">Cantidad de hora semanal</td>
		</tr>
		<tr>
			<td class="centro"><?php echo '$ '.round($pago,2); ?></td>
			<td class="centro"><?php echo $hora; ?></td>
		</tr>
		<tr>
			<td>Impuesto sobre la renta</td>
			<td><?php echo '$ '.round($impuestoRenta,2); ?></td>
		</tr>
		<tr>
			<td>Seguro Social</td>
			<td><?php echo '$ '.round($seguroSocial,2); ?></td>
		</tr>
		<tr>
			<td>Seguro Educativo</td>
			<td><?php echo '$ '.round($seguroEducativo,2); ?></td>
		</tr>
		<tr>
			<td>Total de deducciones</td>
			<td><?php echo '$ '.round($totalDedu,2); ?></td>
		</tr>
		<tr>
			<td>Salario mensual</td>
			<td><?php 	echo '$ '.round($pagoMensual-$totalDedu,2); ?></td>
		</tr>
	</table>

	<form action="../index.php">
	<button class="btn btn-lg btn-primary btn-block">Volver a Calcular</button>
	</form>

	</div>

</body>
</html>

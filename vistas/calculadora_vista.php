
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
	<meta name="viewport" content="width=devide-widht,user-scalable=no,initial-scale=1.0,maximun-scale=1.0;minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	

	<form action="FrontController.php?accion=calculadora" method="post">

		
		<table class="table" >
		<tr>
			<td>
				<h1 class="font-weight-bold">Calculadora</h1>
			</td>
			
		</tr>
		
			<tr>
				<td>
					<h4 class="text-danger">
					<?php if (isset($calculadora)){ echo $calculadora->getVacio(); } else echo " " ?>
				</h4>
				</td>
				
			</tr>

			<tr>
				<td>
					<h4 class="text-danger">
					<?php if (isset($calculadora)){ echo $calculadora->getEntero(); } else echo " " ?>
				</h4>
				</td>
				
			</tr>
			<tr>
				<td>Resultado:</td>
				</td>
			</tr>
			<tr>
				
				<td><input type="text" class="btn-primary" name="txtResultado" disabled="disabled"
					value="<?php if (isset($calculadora)){ echo $calculadora->calcularResultado(); } else echo "0" ?>">
				</td>
			</tr>
						<tr>
				<td><input type="submit" class="btn btn-warning"" name="btnLimpiar" value="Limpiar" /></td>
				
			</tr>
			<tr>
				<td>Primer Numero:</td>
			
			</tr>

			<tr>
				
				<td><input type="text" name="txtNumero1"
					value="<?php if (isset($calculadora)){ echo $calculadora->getNumero1(); } ?>" />
				</td>
			</tr>

			<tr>
				<td>Segundo Numero:</td>
				
			</tr>

						<tr>
				
				<td><input type="text" name="txtNumero2"
					value="<?php if (isset($calculadora)){ echo $calculadora->getnumero2(); } ?>" />
				</td>
			

			<tr>
				<td><input type="submit" class="btn btn-dark"" name="btnRestar" value="Restar" />
				<input type="submit" class="btn btn-dark"lass="btn btn-secondary " name="btnSumar" value="Sumar" />
				</td>

			</tr>

		</table>
	</form>
	

</body>
</html>


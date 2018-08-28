<html>
<head>
<title>Calculadora</title>
</head>
<body>
	<h1>Calculadora</h1>

	<form action="FrontController.php?accion=calculadora" method="post">
		<table border="0">

			<tr>
				
				<h2>
					<?php if (isset($calculadora)){ echo $calculadora->getVacio(); } else echo " " ?>
				</h2>
			</tr>

			<tr>
				
				<h2>
					<?php if (isset($calculadora)){ echo $calculadora->getEntero(); } else echo " " ?>
				</h2>
			</tr>
			<tr>
				<td>Resultado:</td>
				</td>
			</tr>
			<tr>
				
				<td><input type="text" name="txtResultado" disabled="disabled"
					value="<?php if (isset($calculadora)){ echo $calculadora->calcularResultado(); } else echo "0" ?>">
				</td>
			</tr>
						<tr>
				<td><input type="submit" name="btnLimpiar" value="Limpiar" /></td>
				
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
				<td><input type="submit" name="btnRestar" value="Restar" /></td>
				<td><input type="submit" name="btnSumar" value="Sumar" />
				</td>

			</tr>

		</table>
	</form>
	

</body>
</html>


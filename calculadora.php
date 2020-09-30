<!DOCTYPE html>
<html>
	<head>
		<title>implementacion solid y grasp con una calculadora</title>
	</head>
	<body>
   <!-- En este ejemplo hay una violacion clara a el patron Indireccion de las practicas Grasp, 
   el cual nos dice que cuando se tienen varios objetos se debe introducir uno indirecto para 
   que todos se comuniquen entre si como lo hicimos en el primer ejemplo -->

		<h1>Calculadora</h1>
		<form action="resultado.php" method="post">
			<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicaci&oacute;n</option>
				<option value="division">Divisi&oacute;n</option>
			</select><br />
			Ingresa tu primer n&uacute;mero:<br />
			<input type="text" name="valor1"><br />
			Ingresa tu segundo valor:<br />
			<input type="text" name="valor2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
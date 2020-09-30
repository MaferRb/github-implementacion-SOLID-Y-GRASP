<!DOCTYPE html>
<html>
<head>
	<title>implementacion solid y grasp con una calculadora</title>
</head>
<body>
  <!-- vamos a crear un nuevo proyecto una calculadora para ello vamos a crear un formulario en html el cual
   va capturar toda la información, y vamos a emplear un método post.-->

<form action="procesar.php" method="post">
	<label>valor 1</label>
	<p></p>
	<input type="text" name="val1">
	<p></p>
	<label>valor 2</label>
	<p></p>
	<input type="text" name="val2">
	<p></p>
	<select name="opcion">
		<option value="suma">suma</option>
		<option value="resta">resta</option>
		<option value="division">division</option>
		<option value="multiplicacion">multiplicacion</option>
	</select>
	<p></p>
	<button>Calcular</button>
</form>
<!--Lo más fácil y rápido sería crear todo el código en este mismo método, sin embargo, eso estaría rompiendo con el principio se Single Responsibility. 
La forma de hacer esto, respetando este principio, sería incluir diferentes objetos que se encarguen cada uno de una de las acciones-->
</body>
</html>
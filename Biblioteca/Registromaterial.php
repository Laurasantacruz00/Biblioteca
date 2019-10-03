<!DOCTYPE html>
<html>
<head>
	<title>Registro de Materiales</title>
</head>
<body>
	<h2>Formulario de registro de materiales</h2>
	<h3>Todos los campos son requeridos para el registro</h3>
	<form method="POST" action="">
			<table>
				<tr>
					<td>Nombre:</td><td><input type="name" name="name"></td>
				</tr>
				<tr>
					<td>Categoría:</td><td><input type="name" name="Categoría"></td>
				</tr>
				<tr>
					<td>Autor:</td><td><input type="name" name="Autor"></td>
				</tr>
				<tr>
					<td>País:</td><td><input type="name" name="Country"></td>
				</tr>
				<tr>
					<td>Fecha de publicación:</td>
					<td>
						<input type="date" id="start" name="Date"
       					value=""
       					min="1000-01-01" max="2019-12-31">
					</td>
				</tr>
				<tr>
					<td>Número de edición:</td><td><input type="name" name="number"></td>
				</tr>
				<tr>
					<td>Referencía:</td><td><input type="name" name="Reference"></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Registrar"> <input type="reset">
	</form>
	<?php
	if(isset($_POST['submit'])){
		require("registro.php");
	}
	?>
</body>
</html>
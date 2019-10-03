<?php
	$name = $_POST['name'];
	$categoria = $_POST['Categoría'];
	$autor = $_POST['Autor'];
	$pais = $_POST['Country'];
	$numero= $_POST['number'];
	$referencia = $_POST['Reference'];
	$reqlen= strlen($name) * strlen($categoria)* strlen($autor)*strlen($pais)*strlen($numero)*strlen($referencia);
	if($reqlen> 0 ){
		require("database_materiales.php");
		mysql_query("INSERT INTO materiales VALUES('','$name','$categoria','$autor','$pais','',$numero','$referencia')");
		mysql_close($link);
		echo 'Se ha registrado el material correctamente';

	} else{
		echo 'Por favor, llene todos los datos requeridos.';
	}
?>
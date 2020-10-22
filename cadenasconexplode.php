<?php 

	$var="pedro jimenez lopez";
	$fecha="05-05-2017";
	//explode es una funcion que convierte un string  a un arreglo dependiendo de la construccion pedida


	$datos=explode(" ", $var);
	//echo $paterno=$datos[1];
	echo "<pre>";
	print_r($datos);
	echo "</pre>";
	
 ?>
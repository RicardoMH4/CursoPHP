<?php 
	//un arreglo es un tipo de dato que puede contener n datos a partir de un almacenamiento por indice.

	$arreglo=array();
	$arreglo[0]="juan";
	$arreglo[1]=10;
	$arreglo[2]='Tecnologico';
	$arreglo[3]='mexico';

	

	for ($i=0; $i < count($arreglo); $i++) { 
		echo $arreglo[$i];
		echo "<br>";
	}

 ?>
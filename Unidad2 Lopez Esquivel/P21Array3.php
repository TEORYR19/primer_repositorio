<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo
y posteriormente los imprime por mrdio de un ciclo
for 
Jesus Andres Lopez Esquivel
3°A Programacion Matutino*/
$arraynombres = array("Karina","Marco","Rocio","
	Roberto","Fer","Juan");

	//Se obtiene el numero de elementos
$longitud = count($arraynombres);

//Recorre todos los elementos
for($i=0; $i<$longitud; $i++)
	{ //Se obtiene el valor de cada elemento
		echo $arraynombres[$i];
		echo "<br>";
	}
?>
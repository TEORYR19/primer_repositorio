<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo y posteriormente
los imprime por medio de un ciclo for
Jesus Andres Lopez Esquivel
3°A Programacion Matutino*/

// se declara el arreglo llamdo numeros
$numeros = array();

//se guardan los numeros del 1 al 100 en el arreglo
for ($j=1;$j<=100;$j++)
{	$numeros[]=$j;}

//ciclo que recorre todo el arreglo
foreach ($numeros as $valor)
{	//se determina si el numero es par
	if ($valor % 2 == 0)
		{//se imprime el numero
			echo $valor . " ";}
}

?>			
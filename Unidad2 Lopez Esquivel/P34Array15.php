<?php
/*CBTIS 89
P20Array2.php
Programa array codigo donde muestra accesorios de manera acendente y decendente  
Jesus Andres Lopez Esquivel
3°A Programacion Matutino
*/

//Almacena datos en un arreglo
$arraydatos = ["Karina","Rosales","Orozco"];

//Convierte en datos en un arreglo
$string = implode(" ",$arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//Cadena de texto a separar 
$cadena = "tercero de programacion matutino";

//Convierte en una cadena de texto en un array
$array = explode(" ",$cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo <br>";
//Imprime los elementos del arraglo
for($i=0;$i<$longitud;$i++)
	{ //Se obtiene el valor de cada elemento
		echo $array[$i];
		echo "<br>";
	}
?>
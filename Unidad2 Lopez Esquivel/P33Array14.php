<?php
/*CBTIS 89
P20Array2.php
Programa array codigo donde muestra accesorios de manera acendente y decendente  
Jesus Andres Lopez Esquivel
3°A Programacion Matutino
*/
$array_nombres = array("Troe", "Gallo Joaquin", "Gael", "Dylan", "Masquitos", "Jorge el curioso");
echo "Array original:<br>";
foreach($array_nombres as $nombres){
	echo $nombres . "<br>";}
array_push($array_nombres, "Troe");

echo "<br>Array despues de agregar productos:<br>";
foreach($array_nombres as $nombres){
	echo $nombres . "<br>";}
//ascendente
sort($array_nombres);	
echo "<br>Array ordenado en ascendente:<br>";
foreach($array_nombres as $nombres){
	echo $nombres . "<br>";}
//descendente
sort($array_nombres);	
echo "<br>Array ordenado en descendente:<br>";
foreach($array_nombres as $nombres){
	echo $nombres . "<br>";}

?>
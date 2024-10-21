<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo y posteriormente
los imprime por medio de un ciclo for
Jesus Andres Lopez Esquivel
3°A Programacion Matutino
*/
$nombres = ["Troe", "Gallo Joaquin", "Gael", "Dylan", "Masquitos", "Jorge el curioso", "Apiolene", "Mama Coco"];
$nombre = "Mama Coco";
foreach ($nombres as $n) {
	if ($n === $nombre){
		echo "Este nombre si existe";
	}
}

?>
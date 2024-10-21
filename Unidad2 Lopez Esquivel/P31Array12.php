<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo y posteriormente
los imprime por medio de un ciclo for
Jesus Andres Lopez Esquivel
3°A Programacion Matutino
*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>
<?php
/*CBTIS 89 
Programa que almacena por medio de un ciclo
los numeros del 150 al 200 de la siguiente manera:
En el $Arreglo1 van los números pares, en el $Arreglo2 van los números impares, en el $Arreglo3 va la suma de los números correspondiente al mismo índice.
Lopez Esquivel Jesus Andres
3°A Programacion Matutino
*/

$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();


for ($i = 150; $i <= 201; $i++) {
    if ($i % 2 == 0) {
        $Arreglo1[] = $i; 
    } else {
        $Arreglo2[] = $i;
    }
}
for ($j = 0; $j < count($Arreglo1); $j++) {
    $Arreglo3[] = $Arreglo1[$j] + $Arreglo2[$j];
}


echo "CBTIS 89<br>";
echo "Arreglo1 ----- Arreglo2 ----- Arreglo3<br>";
for ($k = 0; $k < count($Arreglo1); $k++) {
    echo $Arreglo1[$k] . " ------------- " . $Arreglo2[$k] . " ------------ " . $Arreglo3[$k] . "<br>";
}
?>



<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo
y posteriormente los imprime por
medio de un ciclo for 
Jesus Andres Lopez Esquivel
3°A Programacion Matutino*/
 $nombre = "Andres";
 $array = array(1,2,3, "casa", $nombre);

 //Se obtiene el numero de elementos
 //$logitud = count0($array);

 //Recorre todos los elementos
 for($i=0; $i<5;$i++)
 {//Se obtiene  el valor de cada elemento 
 echo $array[$i];
 echo "<br>";
 }
?>
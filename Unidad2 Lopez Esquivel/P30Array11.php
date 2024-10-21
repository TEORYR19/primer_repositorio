<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo y posteriormente
los imprime por medio de un ciclo for
Jesus Andres Lopez Esquivel
3°A Programacion Matutino
*/
 $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>
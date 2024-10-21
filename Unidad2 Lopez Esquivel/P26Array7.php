<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo y posteriormente
los imprime por medio de un ciclo for
Jesus Andres Lopez Esquivel
3°A Programacion Matutino*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>
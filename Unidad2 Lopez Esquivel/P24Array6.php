<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo
posteriormente los imprime
Jesus Andres Lopez Esquivel
3°A Programacion Matutino*/

$Personas = array("Mecatronica"=>"Zoe","Arquitectura"=>"Mateo","Programacion"=>"Troe","Albañil"=>"Gina","Contabilidad"=>"Pepe");

echo "** CBTIS 89 **","<br>","<br>";
foreach($Personas as $Carrera=>$losnombres)
{echo "Nombre: " . $losnombres . " Especialidad: " . $Carrera . " Edad: 16 años";
echo "<br>","<br>";
}
?>
<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo
posteriormente los imprime
Jesus Andres Lopez Esquivel
3°A Programacion Matutino*/

$equipo = array("portero"=>"Julio","defensa"=>"Diego","medio"=>"Jair","delantero"=>"Rafa");

echo "** SELECCION NACIONAL **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "El jugador " . $jugador . " es  el ". $posicion;
echo "<br>","<br>";
}
?>
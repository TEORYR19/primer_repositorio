<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo
posteriormente los imprime
Jesus Andres Lopez Esquivel
3°A Programacion Matutino*/
$fruteria = array("25"=>"manzana","40"=>"mango","35"=>"limon","20"=>"naranja");

echo "** FRUTERIA DEL SUR **","<br>","<br>";
foreach($fruteria as $precio=>$frutas)
{ echo "El kilo de " . $frutas . " cuesta ". $precio;
echo "<br>","<br>";
}
?>


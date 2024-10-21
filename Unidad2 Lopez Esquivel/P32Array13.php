<?php
/*CBTIS 89
P20Array2.php
Programa array codigo donde muestra accesorios de manera acendente y decendente
Jesus Andres Lopez Esquivel
3°A Programacion Matutino
*/
// Paso 1: Definir el array de productos
$productos = array("Camisa", "Pantalón", "Cinturón", "Gorra", "Calcetines");

// Paso 2: Mostrar el array original
echo "Productos originales:<br>";
print_r($productos);
echo "<br><br>";

// Paso 3: Ordenar el array de manera descendente
rsort($productos);
echo "Productos ordenados de manera descendente:<br>";
print_r($productos);
?>

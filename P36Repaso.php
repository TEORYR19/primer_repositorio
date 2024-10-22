<?php
/*CBTIS 89
Programa que imprime nombres y sus edades para
despues sumar, restar, multiplicar y dividir las edades
Jesus Andres Lopez Esquivel
3°A Programacion Matutino
*/
// Definimos un array con los nombres y otro con las edades
$nombres = array("Juan", "Pepe", "Gael", "Zoe", "Gabo", "Gera");
$edades = array(25, 30, 22, 28, 27, 24);

// Inicializamos un índice
$indice = 0;

// Imprimimos los nombres y edades en forma de lista
echo "<ul>"; // Inicia una lista desordenada
while ($indice < count($nombres)) {
    echo "<li>" . $nombres[$indice] . " - Edad: " . $edades[$indice] . "</li>"; // Cada nombre y edad en un elemento de lista
    $indice++; // Incrementamos el índice
}
echo "</ul>"; // Cierra la lista


// Inicializamos las variables para las operaciones
$sumaEdades = 0;
$restaEdades = $edades[0]; // Iniciamos con la primera edad para la resta
$multiplicacionEdades = 1; // Iniciamos con 1 para la multiplicación
$dividido = $edades[0]; // Iniciamos con la primera edad para la división

// Realizamos las operaciones usando un ciclo for
for ($i = 0; $i < count($edades); $i++) {
    $sumaEdades += $edades[$i]; // Sumar

    if ($i > 0) { // Para evitar restar la primera edad
        $restaEdades -= $edades[$i]; // Restar
    }

    $multiplicacionEdades *= $edades[$i]; // Multiplicar

    if ($i > 0) { // Para evitar dividir por la primera edad
        $dividido /= $edades[$i]; // Dividir
    }
}

// Mostramos los resultados
echo "Suma de las edades: " . $sumaEdades . "<br>";
echo "Resta de las edades: " . $restaEdades . "<br>";
echo "Multiplicación de las edades: " . $multiplicacionEdades . "<br>";
echo "División de las edades: " . $dividido . "<br>";

?>

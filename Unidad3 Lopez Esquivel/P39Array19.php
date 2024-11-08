<?php
/*CBTIS 89
P39Array19.php
Programa que almacena informacion de 6 personas y
dependiendo de su edad los contabiliza en diversos 
arreglos de acuerdo a las siguientes condiciones:
Si la persona es menor de 18 años se debe colocar un 1 en el arreglo $Grupo1 y en los otros dos colocar un 0.
Si la persona tiene entre 18 y 49 años se debe colocar un 1 en el arreglo $Grupo2 y en los otros dos colocar un 0.
Si la persona tiene 50 años o más se debe colocar un 1 en el arreglo $Grupo3 y en los otros dos un 0.
Jesus Andres Lopez Esquivel
3ºA Turno Matutino. 
*/

$Nombre = array("Paco", "Mari", "Lalo", "Rosi", "Paty", "Beto");
$Edad = array(17, 30, 71, 38, 12, 58);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();

for ($i = 0; $i < count($Edad); $i++) {
    if ($Edad[$i] < 18) {
        $Grupo1[] = 1;
        $Grupo2[] = 0;
        $Grupo3[] = 0;
    } elseif ($Edad[$i] >= 18 && $Edad[$i] <= 49) {
        $Grupo1[] = 0;
        $Grupo2[] = 1;
        $Grupo3[] = 0;
    } else {
        $Grupo1[] = 0;
        $Grupo2[] = 0;
        $Grupo3[] = 1;
    }
}

// Imprimir resultados
echo "Nombre\tEdad\tGrupo1\tGrupo2\tGrupo3\n";
echo "<br>";
for ($i = 0; $i < count($Nombre); $i++) {
    echo $Nombre[$i] . "------" . $Edad[$i] . "------" . $Grupo1[$i] . "--------" . $Grupo2[$i] . "--------" . $Grupo3[$i] . "\n";
    echo "<br>";
}
?>







<!-- 4. Estructuras de control
If / Else -->
<?php
$nota = 85;

if ($nota >= 60) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}
?>

<!-- Switch -->
<?php
$dia = "Lunes";

switch ($dia) {
    case "Lunes":
        echo "Inicio de semana";
        break;
    case "Viernes":
        echo "Casi fin de semana";
        break;
    default:
        echo "Día cualquiera";
}
?>

<!-- Bucles -->
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Número $i <br>";
}

$contador = 1;
while ($contador <= 3) {
    echo "Iteración $contador <br>";
    $contador++;
}
?>
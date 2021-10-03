<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
   
<?php

$primero = 4;
$segundo = 7;

printf("El numero %d en binario es %b", $primero, $primero);
echo "<br>";
printf("El numero %d en binario es %b", $segundo, $segundo);
echo "<br>";


$opAND = $primero & $segundo;
printf("La operacion con &: %b", $opAND);

echo "<br>";

$opNOT = ~$primero;

printf("La operacion con not: %b", $opNOT);

echo "<br>";

$opNOT = ~$segundo;

printf("La operacion con not: %b", $opNOT);

echo "<br>";

$opOR = $primero | $segundo;

printf("La operacion con or: %b", $opOR);

echo "<br>";

$opXOR = $primero ^$segundo;

printf("La operacion con xor: %b", $opXOR);

?>


</body>
</html>
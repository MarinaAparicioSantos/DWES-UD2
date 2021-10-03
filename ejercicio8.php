<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

<?php

$varUno = "47";

printf("El numero %s ", $varUno);
echo "<br>";
echo "La variable es de tipo: " , var_export(gettype($varUno));
echo "<br>";
echo "La variable es de tipo null:" , var_export(is_null($varUno));
echo "<br>";
echo "La variable es de tipo objeto - " , var_export(is_object($varUno));

$varUno = 2.66;

echo "<br>";
printf("El numero %s ", $varUno);
echo "<br>";
echo "La variable es de tipo float: " , var_export(is_float($varUno));
echo "<br>";
echo "La variable es de tipo scalar: " , var_export(is_scalar($varUno));
echo "<br>";
echo "La variable es de tipo string: " , var_export(is_string($varUno));

$varUno = (integer)$varUno;
echo "<br>";
printf("El numero %s ", $varUno);
echo "<br>";
echo "La variable es de tipo: " , var_export(gettype($varUno));

$varDos = "47Marina";

echo "<br>";
printf("El string es: %s ", $varDos);

$varDos = (integer) $varDos;

echo "<br>";
printf("El integer es: %s ", $varDos);






?>
</body>
</html>
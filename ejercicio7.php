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



printf("El numero %s en binario es %b", $primero, $primero);
echo "<br>";
printf("El numero %s en binario es %b", $segundo, $segundo);
echo "<br>";
printf("La operacion con &: ", var_export($primero & $segundo));

?>


</body>
</html>
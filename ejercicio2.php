<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    

<?php
    $base = 20;
    $altura = 5;
    $dmayor = 50;
    $dmenor = 30;
    $r = 25;

    $triangulo = ($base * $altura)/2;
    $cuadrado = $base * $altura;
    $rombo = ($dmayor * $dmenor)/2;

    define("PI", 3.14159);
    $circulo = PI * $r * $r;

    echo "<p>El triángulo de base ", $base, "cm , y altura ", $altura, "cm, tiene un área de ", $triangulo, "cm.</p>";
    print "<br>";
    echo "<p>El cuadrado de base ", $base, "cm , y altura ", $altura, "cm, tiene un área de ", $cuadrado, "cm.</p>";
    print "<br>";
    echo "<p>El rombo de diagonal mayor ", $dmayor, " y diagonal menor ", $dmenor, " tiene un área de ", $rombo, ".</p>";
    print "<br>";
    printf("<p>El círculo de radio %s tiene un área de %s.</p>", $r, $circulo);
    print "<br>";


?>



</body>
</html>
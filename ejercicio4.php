<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    

<?php
    $pantalon = 29.99;
    $pantCantidad = 3;
    $totalPant = $pantalon * $pantCantidad;
    $camisa = 25.99;
    $camiCantidad = 2;
    $totalCami = $camisa * $camiCantidad;

    $total = $totalPant + $totalCami;
    define("DESCUENTO", 8);

    $totalDescuento = $total-(DESCUENTO * $total /100);

    $zapatos = 45.99;

    $descZapatos = 12;

    $totalConZapatosDesc = $zapatos -($descZapatos * $zapatos /100);

    $totalCuentaZapatos = $totalDescuento += $totalConZapatosDesc;

    
    printf("<p>El precio de un pantalón es de %s.</p>", $pantalon);
    printf("<p>El precio de una camisa  es de %s.</p>", $camisa);
    printf("<p>El total sin descuento es de %s.</p>", $total);
    printf("<p>El total con descuento es de %.2f.</p>", $totalDescuento);
    print "<br>";
    printf("<p>El precio de los zapatos sin descuento es de %s.</p>", $zapatos);
    printf("<p>El precio de los zapatos con descuento es de %.2f.</p>", $totalConZapatosDesc);
    printf("<p>El total de la cuenta es de %.2f.</p>", $totalCuentaZapatos);


?>



</body>
</html>
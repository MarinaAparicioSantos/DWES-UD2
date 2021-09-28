<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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


    printf("<p>El precio de un pantalón es de %s.</p>", $pantalon);
    printf("<p>El precio de una camisa  es de %s.</p>", $camisa);
    printf("<p>El total sin descuento es de %s.</p>", $total);
    printf("<p>El total con descuento es de %.2f.</p>", $totalDescuento);

//%.2f

?>



</body>
</html>
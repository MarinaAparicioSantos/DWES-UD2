<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 6</title>
</head>
<body>
<?php
    $numOperacionesDiarias = "4";
    $numOperacionesSemanales = 28;

    define("MaxOpDiarias", 6);
    define("MaxOpSemanales", 30);



        echo "El valor de operaciones diarias es mayor igual que el máximo.", var_export($numOperacionesDiarias>=MaxOpDiarias);
        echo "<br>";
        echo "El valor de operaciones semanales es mayor o igual que el máximo.", var_export($numOperacionesSemanales>=MaxOpSemanales);
        echo "<br>";
        echo "El valor de operaciones diarias es idéntico al máximo.", var_export($numOperacionesDiarias === MaxOpDiarias);
        echo "<br>";
        echo "El valor de operaciones diarias es distinto al de operaciones semanales.",var_export($numOperacionesDiarias!=$numOperacionesSemanales,);

      ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>

<?php
echo "<br>";
echo "PHP_SELF: ",$_SERVER['PHP_SELF'],"  -  Muestra el directorio raíz de documentos del servidor.";
echo "<br>";
echo "SERVER _ADDR: ",$_SERVER['SERVER_ADDR'], "  -  Muestra la dirección IP del servidor donde se está ejecutando actualmente el script.";
echo "<br>";
echo "DERVER_NAME: ",$_SERVER['SERVER_NAME'], "  -  Muestra el nombre del host del servidor donde se está ejecutando actualmente el script.";
echo "<br>";
echo "DOCUMENT_ROOT: ",$_SERVER['DOCUMENT_ROOT'], "  -  Muestra el directorio raíz de documentos del servidor en el cual se está ejecutando el script actual, según está definida en el archivo de configuración del servidor.";
echo "<br>";
echo "REMOTE_ADDR: ",$_SERVER['REMOTE_ADDR'], "  -  Muestra la dirección IP desde la cual está viendo la página actual el usuario.";
echo "<br>";
echo "REQUEST_METHOD: ",$_SERVER['REQUEST_METHOD'], "  -  Muestra el método de petición empleado para acceder a la página. ";


$variableGlobal = "g";

function funcion() {
    $variableLocal = "s";

    static $variableEstatica = "e";

    $variableGlobal = "gdos";
    }

    echo $variableLocal;
    echo $variableEstatica;
    echo $variableGlobal;

?>
    
</body>
</html>
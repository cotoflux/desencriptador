<?php
    require_once '../vendor/autoload.php';
    use Proyecto\Encriptador;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desencriptador</title>
</head>
<body>
    

    <?php
    $primerEncriptado = new Encriptador();
    $primerEncriptado->startEncription();
    
    echo $primerEncriptado->inputTextoEncripted . "<br><br><br>";
    print_r($primerEncriptado->getKey());
    ?>
    
</body>
</html>
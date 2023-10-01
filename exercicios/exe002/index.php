<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso POO PHP</title>
</head>
<body>
    <pre>
<?php 
        require_once "Caneta.php";
        $c1 = new Caneta;
        $c1->cor = "azul";
        $c1->rabiscar();
        $c1->tampar();
        print_r($c1);
    ?>
    </pre>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <?php 
    require_once 'ControleRemoto.php';
    $c = new ControleRemoto();
    $c->ligar();
    $c->maisVolume();
    //$c->maisVolume();
    $c->abrirMenu();
    

    ?>
    </pre>
</body>
</html>
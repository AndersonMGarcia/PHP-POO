<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento - POO em PHP</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php
            require_once "ControleRemoto.php";
            
            $cr = new ControleRemoto();

            $cr->ligar();
            $cr->maisVolume();
            $cr->abrirMenu();
        ?>
    </pre>
</body>
</html>
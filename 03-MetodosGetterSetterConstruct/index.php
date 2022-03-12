<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Getters, Setters e Construtor</title>
</head>
<body>
    <pre>
        <?php
            require_once "Caneta.php";

            $c1 = new Caneta("Compactor", "Preta", 1.0);

            //$c1->setModelo("Bic");
           // $c1->setPonta(0.5);

            $modelo = $c1->getModelo();
            $ponta =  $c1->getPonta();
            $cor = $c1->getCor();

            echo "Minha caneta é uma $modelo de cor $cor com ponta $ponta mm.<hr>";
            print_r($c1);
        ?>
    </pre>    
</body>
</html>
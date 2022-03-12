<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade de ATributos e Métodos</title>
</head>
<body>
    <pre>
        <?php
            require 'Caneta.php';
            
            $caneta1 = new Caneta();

            $caneta1->modelo = "Bic Crystal";
            $caneta1->cor    = "Azul";
            //$caneta1->ponta = 1.0;
           // $caneta1->carga = 75;
            
           // $caneta1->destampar();
           // $caneta1->rabiscar();

           $caneta1->tampar();
           $caneta1->rabiscar();
            print_r($caneta1);
        ?>
    </pre>
    
</body>
</html>
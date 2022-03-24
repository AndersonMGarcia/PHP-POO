<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo - Sobrecarga de Métodos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <?php
            require_once "Mamifero.php";
            require_once "Cachorro.php";
            require_once "Lobo.php";

            $m = new Mamifero();
            $c = new Cachorro();
            $l = new Lobo();

            echo "<h3>Mamífero</h3>";            
            $m->emitirSom();
            echo "<hr>";

            echo "<h3>Cachorro</h3>"; 
            $c->emitirSom();
            $c->reagirFrase("Olá");
            $c->reagirFrase("Vai apanhar!");
            $c->reagirHora(11,45);
            $c->reagirHora(21,00);
            $c->reagirDono(true);
            $c->reagirDono(false);
            $c->reagirIdade(2,12.5);
            $c->reagirIdade(17,4.5);

            echo "<hr>";

            echo "<h3>Lobo</h3>"; 
            $l->emitirSom();
            echo "<hr>";

        ?>
    </div>    
</body>
</html>
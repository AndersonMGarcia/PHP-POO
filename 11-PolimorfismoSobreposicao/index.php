<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo - parte 1</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <?php
            require_once "Mamifero.php";
            require_once "Ave.php";
            require_once "Peixe.php";
            require_once "Reptil.php";
            require_once "Canguru.php";
            require_once "Cobra.php";
            require_once "GoldFish.php";
            require_once "Tartaruga.php";
            require_once "Cachorro.php";
            require_once "Arara.php";

            $mamif = new Mamifero();

            $mamif->setPeso(33.5);
            $mamif->setIdade(3);
            $mamif->setMembro(4);

            echo "<strong>Mamífero</strong><br>";
            echo "<br>Peso: ". $mamif->getPeso(). " kg";
            echo "<br>Idade: ". $mamif->getIdade(). " anos";
            echo "<br>Membros: ". $mamif->getMembros(). " patas";
            echo "<br>-----------------------";
            $mamif->alimentar();
            $mamif->locomover();
            $mamif->emitirSom();
            echo "<hr>";

            $p = new Peixe();

            $p->setPeso(0.750);
            $p->setIdade(1);
            $p->setMembro(0);
            $p->setCorEscama("Cinza escuro");

            echo "<strong>Peixe</strong><br>";
            echo "<br>Peso: ". $p->getPeso(). " kg";
            echo "<br>Idade: ". $p->getIdade(). " anos";
            echo "<br>Membros: ". $p->getMembros();
            echo "<br>Cor da Escama: ". $p->getCorEscama();
            echo "<br>-----------------------";
            $p->alimentar();
            $p->locomover();
            $p->emitirSom();
            $p->soltarBolha();
            echo "<hr>";


            $a = new Ave();

            $a->setPeso(0.450);
            $a->setIdade(2);
            $a->setMembro(2);
            $a->setCorPena("Marrom");

            echo "<strong>Ave</strong><br>";
            echo "<br>Peso: ". $a->getPeso(). " kg";
            echo "<br>Idade: ". $a->getIdade(). " anos";
            echo "<br>Membros: ". $a->getMembros();
            echo "<br>Cor da pena: ". $a->getCorPena();
            echo "<br>-----------------------";
            $a->alimentar();
            $a->locomover();
            $a->emitirSom();
            $a->fazerNinho();
            echo "<hr>";

            $a = new Reptil();

            $a->setPeso(1.5);
            $a->setIdade(4);
            $a->setMembro(4);
            $a->setCorEscama("Verde");

            echo "<strong>Réptil</strong><br>";
            echo "<br>Peso: ". $a->getPeso(). " kg";
            echo "<br>Idade: ". $a->getIdade(). " anos";
            echo "<br>Membros: ". $a->getMembros(). " patas";
            echo "<br>Cor da escama: ". $a->getCorEscama();
            echo "<br>-----------------------";
            $a->alimentar();
            $a->locomover();
            $a->emitirSom();            
            echo "<hr>";
            

            $c = new Canguru();

            $c->setPeso(30);
            $c->setIdade(3);
            $c->setMembro(4);
           

            echo "<strong>Canguru</strong><br>";
            echo "<br>Peso: ". $c->getPeso(). " kg";
            echo "<br>Idade: ". $c->getIdade(). " anos";
            echo "<br>Membros: ". $c->getMembros(). " patas";
            
            echo "<br>-----------------------";
            $c->alimentar();
            $c->locomover();
            $c->emitirSom();            
            echo "<hr>";

            $t = new Tartaruga();

            $t->setPeso(7);
            $t->setIdade(25);
            $t->setMembro(4);
           

            echo "<strong>Tartaruga</strong><br>";
            echo "<br>Peso: ". $t->getPeso(). " kg";
            echo "<br>Idade: ". $t->getIdade(). " anos";
            echo "<br>Membros: ". $t->getMembros(). " patas";
            
            echo "<br>-----------------------";
            $t->alimentar();
            $t->locomover();
            $t->emitirSom();            
            echo "<hr>";


        ?>
    </div>    
</body>
</html>
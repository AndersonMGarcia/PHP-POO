<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final - POO com PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <pre>
            <?php
                require_once "Video.php";
                require_once "Gafanhoto.php";
                require_once "Visualizacao.php";

                $v [0] = new Video("Aula 12 de PHP");
                $v [1] = new Video("Aula 1 de POO");
                $v [2] = new Video("Aula 15 de HTML5");               
               
                $v[0]->setAvaliacoes(1);
                print_r($v[0]);
                
                echo "<hr>";
                $v[1]->setAvaliacoes(1);
                print_r($v[1]);
                echo "<hr>";
                $v[2]->setAvaliacoes(1);
                print_r($v[2]);
                echo "<hr>";


                $g [0] = new Gafanhoto("Anderson", 35, "M", "Andy");
                $g[0]->setExperiencia(10);
                print_r($g[0]);
                echo "<hr>";

                $g [1] = new Gafanhoto("Marcia", 32, "F", "Marcinha");
                $g[1]->setExperiencia(1);
                print_r($g[1]);
                echo "<hr>";


                $visu[0] = new Visualizacao($g[0], $v[0]);
                $visu[0]->avaliar();
                print_r($visu[0]);

                echo "<hr>";

                $visu[1] = new Visualizacao($g[1], $v[1]);
                $visu[0]->avaliar();
                print_r($visu[1]);


            ?>
        </pre>
        
    </div>    
</body>
</html>
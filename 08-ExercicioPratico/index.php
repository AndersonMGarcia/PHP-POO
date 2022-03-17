<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Prático em PHP com POO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <pre>
            <?php
                require_once "Pessoa.php";
                require_once "Livro.php";



                $pessoa[0] = new Pessoa("Pedro", 22, "M");
                $pessoa[1] = new Pessoa("Maria", 36, "F");

               

               


                $livro[0] = new Livro("PHP Básico", "José da Silva", 300, $pessoa[0]);
                $livro[1] = new Livro("POO com PHP", "Maria de Sousa", 500, $pessoa[1]);
                $livro[2] = new Livro("PHP Avançado", "Maria de Sousa", 800, $livro[1]);

                $livro[0]->abrir();

                //$livro[0]->folhear(85);
                //$livro[0]->avancarPage();
                
                $livro[0]->voltarPage();
                
                $livro[0]->detalhes();

                print_r($livro[0]);

                

                
            ?>
        </pre>
    </div>    
</body>
</html>
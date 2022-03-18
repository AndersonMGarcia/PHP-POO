<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança em PHP</title>
</head>
<body>
    <pre>
    <?php
    require_once "Pessoa.php";
        require_once "Aluno.php";
        require_once "Funcionario.php";
        require_once "Professor.php";

        $p1 = new Aluno();
        $p2 = new Professor();
        $p3 = new Funcionario();

        $p1->setNome("Anderson");
        $p1->setSexo("M");
        $p1->setIdade(25);
        $p2->setNome("Pedro");
        $p2->setSexo("M");
        $p2->setIdade(38);
        $p2->setEspecialidade("Programação");
        $p3->setNome("Marcela");
        $p3->setSexo("F");
        $p3->setIdade(27);
        $p3->setTrabalhando(true);
        $p3->mudarTrabalho();

        echo "<hr>";
        echo "<br>Aluno: ". $p1->getNome();
        echo "<br>Professor: ". $p2->getNome();
        echo "<br>Funcionário: ". $p3->getNome();

        $p1->setCurso("PHP");
        $p1->setMatricula(True);
        $p1->cancelarMatricula();
        $p2->setSalario(2500.75);
        $p2->receberAumento(550);
        $p3->setSetor("Estoque");




        echo "<hr>";

        print_r($p1);
        print_r($p2);
        print_r($p3);

    ?>
    </pre>
</body>
</html>
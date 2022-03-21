<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança - 2</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <?php
            require_once "Visitante.php";
            require_once "Aluno.php";
            require_once "Bolsista.php";
            require_once "Professor.php";
            require_once "Tecnico.php";

            $p1 = new Visitante();

            $p1->setNome("Anderson");
            $p1->setIdade(40);
            $p1->setSexo("Masculino");

            echo "<h3>Visitante</h3>";
            echo "Nome: ". $p1->getNome();
            echo "<br>Idade: ". $p1->getIdade()." anos";
            echo "<br>Sexo: ". $p1->getSexo();
            echo "<hr>";


            $p2 = new Aluno();

            $p2->setNome("Pedro");
            $p2->setIdade(26);
            $p2->setSexo("Masculino");
            $p2->setMatricula(1252);
            $p2->setCurso("POO com PHP");

            echo "<h3>Aluno</h3>";
            echo "Nome: ". $p2->getNome();
            echo "<br>Idade: ". $p2->getIdade()." anos";
            echo "<br>Sexo: ". $p2->getSexo();
            echo "<br>Matrícula: ". $p2->getMatricula();
            echo "<br>Curso: ". $p2->getCurso();
            echo $p2->pagarMensalidade();
            echo "<hr>";

            $p3 = new Bolsista();

            $p3->setNome("Maria");
            $p3->setIdade(17);
            $p3->setSexo("Feminino");
            $p3->setMatricula(7725);
            $p3->setCurso("POO com PHP");
            $p3->setBolsa(15.5);

            echo "<h3>Bolsista</h3>";
            echo "Nome: ". $p3->getNome();
            echo "<br>Idade: ". $p3->getIdade()." anos";
            echo "<br>Sexo: ". $p3->getSexo();
            echo "<br>Matrícula: ". $p3->getMatricula();
            echo "<br>Curso: ". $p3->getCurso();
            echo "<br>Bolsa: ". $p3->getBolsa(). "%";
            echo $p3->pagarMensalidade();
            $p3->renovarBolsa();
            echo "<hr>";

            $p4 = new Professor();

            $p4->setNome("Amanda");
            $p4->setIdade(43);
            $p4->setSexo("Feminino");
            $p4->setEspecialidade("Professor de Engenharia de Dados");
            $p4->setSalario(3780.75);

            echo "<h3>Professor</h3>";
            echo "Nome: ". $p4->getNome();
            echo "<br>Idade: ". $p4->getIdade()." anos";
            echo "<br>Sexo: ". $p4->getSexo();
            echo "<br>Especialidade: ". $p4->getEspecialidade();            
            echo "<br>Salário: ". $p4->getSalario();

            $p4->receberAumento(680.42);

            echo "<br>Novo salário com aumento: ". $p4->getSalario();

            echo "<hr>";


            $p5 = new Tecnico();

            $p5->setNome("Maria");
            $p5->setIdade(17);
            $p5->setSexo("Feminino");
            $p5->setMatricula(7725);
            $p5->setCurso("Tecnologia em Desenvolvimento de Sistemas");
            $p5->setRegistroPro(120572);
            
            

            echo "<h3>Técnico</h3>";            
            echo "Nome: ". $p5->getNome();
            echo "<br>Idade: ". $p5->getIdade()." anos";
            echo "<br>Sexo: ". $p5->getSexo();
            echo "<br>Matrícula: ". $p5->getMatricula();
            echo "<br>Curso: ". $p5->getCurso();
            echo "<br>Registro Profissional: ". $p5->getRegistroPro();
            echo $p5->pagarMensalidade();     
            
            $p5->praticar();
            echo "<hr>";


            
        ?>
    </div>    
</body>
</html>
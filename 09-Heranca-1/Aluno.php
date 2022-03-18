<?php
    require_once "Pessoa.php";


    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function __construct()
        {
            
        }

        public function cancelarMatricula(){
            echo "<br>Matrícula será cancelada!</br>";
        }

        public function getMatricula(){
            return $this->matricula;
        }
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getCurso(){
            return $this->curso;
        }
        public function setCurso($curso){
            $this->curso = $curso;
        }
    }

<?php

    require_once "Pessoa.php";

    class Aluno extends Pessoa{
        
        private $matricula;
        private $curso;

        //Método Construtor
        public function __construct()
        {
            
        }

        //Métodos
        public function pagarMensalidade(){

            if ($this->getSexo() == "Masculino"){
                echo "<p>Pagando mensalidade do aluno ". $this->getNome() . "</p>";
            }else{
                echo "<p>Pagando mensalidade da aluna ". $this->getNome() . "</p>";
            }
            
        }

        //Métodos Getters/Setters
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
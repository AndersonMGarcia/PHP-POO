<?php


    require_once "Aluno.php";

    class Bolsista extends Aluno{

        private $bolsa;

        //Método Construtor
        public function __construct()
        {
            
        }

        //Métodos
        public function renovarBolsa(){
            echo "<br>Bolsa renovada!</br>";
        }

        public function pagarMensalidade()
        {
            echo "<br>". $this->getNome() ." é bolsista! Então paga com desconto!";
        }

        //Métodos Getters/Setters
        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }

    }
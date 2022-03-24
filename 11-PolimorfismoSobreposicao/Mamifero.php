<?php

    require_once "Animal.php";

    class Mamifero extends Animal{

        private $corPelo;

        //Método Construtor

        public function __construct()
        {
            
        }

        //Métodos abstratos da Classe Animal

        public function locomover()
        {
            echo "<br>Correndo";
        }
        public function alimentar()
        {
            echo "<br>Mamando";        
        }
        public function emitirSom()
        {
            echo "<br>Som de Mamífero";        
        }
        
        //Métodos Getters/Setters

        public function getCorPelo(){
            return $this->corPelo;
        }
        public function setCorPelo($corPelo){
            $this->corPelo = $corPelo;
        }

        public function getPeso(){
            return $this->peso;
        }
        public function setPeso($peso){
            $this->peso = $peso;
        }

        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getMembros(){
            return $this->membros;
        }
        public function setMembro($membros){
            $this->membros = $membros;
        }
    }
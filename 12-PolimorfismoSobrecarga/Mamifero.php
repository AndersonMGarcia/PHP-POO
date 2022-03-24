<?php

    require_once "Animal.php";

    class Mamifero extends Animal{

        private $CorDoPelo;

        //Método Construtor
        public function __construct()
        {

        }
        //Métodos Getters/Setters
        public function getCorPelo(){
            return $this->CorDoPelo;
        }
        public function setCorPelo($CorDoPelo){
            $this->CorDoPelo = $CorDoPelo;
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
            $this->idade =$idade;
        }

        public function getMembros(){
            return $this->membros;
        }
        public function setMembros($membros){
            $this->membros = $membros;
        }

        //Método abstrato da classe Animal
        public function emitirSom()
        {
            echo "<br>Som de mamíferos";        
        }

    }
<?php

    require_once "Animal.php";

    class Reptil extends Animal{
        
        private $corEscama;

        //Método Construtor
        public function __construct()
        {
            
        }

        //Métodos abstratos da classe Animal

        public function locomover()
        {
            echo "<br>Rastejando";
        }
        public function alimentar()
        {
            echo "<br>Comendo vegetais";
        }
        public function emitirSom()
        {
            echo "<br>Som de Réptil";
        }

        //Métodos Getters/Setters

        public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
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
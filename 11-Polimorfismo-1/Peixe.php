<?php

    require_once "Animal.php";

    class Peixe extends Animal{

        private $corEscama;

        //Métodos

        public function soltarBolha(){
            echo "<br>Soltou uma bolha";
        }

        //Métodos abstratos da classe Animal

        public function locomover()
        {
            echo "<br>Nadando";
        }
        public function alimentar()
        {
            echo "<br>Comendo substâncias";
        }
        public function emitirSom()
        {
            echo "<br>Peixe não faz som";
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
<?php

    require_once "Animal.php";

    class Ave extends Animal{

        private $corPena;

        //Métodos
        public function fazerNinho(){
            echo "<br>Construiu um ninho";
        }

        //Métodos abstratos da classe Animal

        public function locomover()
        {
            echo "<br>Voando";
        }
        public function alimentar()
        {
            echo "<br>Comendo frutas";
        }
        public function emitirSom()
        {
            echo "<br>Som de ave";
        }

        //Métodos Getters/Setters
        
        public function getCorPena(){
            return $this->corPena;
        }
        public function setCorPena($corPena){
            $this->corPena = $corPena;
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
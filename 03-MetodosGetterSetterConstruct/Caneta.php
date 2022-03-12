<?php

    class Caneta{
        private $modelo;
        private $ponta;
        private $cor;       
        private $tampada;

        public function __construct($m, $c, $p){
            
            $this->setModelo($m);
            $this->setCor($c);
            $this->setPonta($p);
            
        }

        public function getModelo(){
            return $this->modelo;    
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        //----------------------------------------------------------------------------------
        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($ponta){
            $this->ponta = $ponta;
        }
        //-----------------------------------------------------------------------------------
        public function getCor(){
            return $this->cor;
        }
        public function setCor($cor){
            $this->cor = $cor;
        }
        //-----------------------------------------------------------------------------------
        public function tampar(){
            $this->tampada = true;
        }
    }
<?php

    require_once "Video.php";
    require_once "Gafanhoto.php";

    class Visualizacao{

        private $espectador;
        private $filme;
        
        //Método Construtor
        public function __construct($espectador, $filme){

            $this->setFilme($filme);
            $this->setEspectador($espectador);
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
            

            
        }

        //Métodos
        public function avaliar(){
            $this->filme->setAvaliacoes(5);f
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacoes($nota);    
        }

        public function avaliarPorc($porc){
            
            $novaNota = 0;

            if ($porc <= 20){
                $novaNota = 3;
            }elseif ($porc <= 50){
                $novaNota = 5;
            }elseif ($porc <= 90){
                $novaNota = 8;
            }else{
                $novaNota = 10;
            }

            $this->filme->setAvaliacoes($novaNota);
        }

        //Métodos Getters/Setters
        public function getEspectador(){
            return $this->espectador;
        }
        public function setEspectador($espectador){
            $this->espectador = $espectador;
        }

        public function getFilme(){
            return $this->filme;
        }
        public function setFilme($filme){
            $this->filme = $filme;
        }
        
    }
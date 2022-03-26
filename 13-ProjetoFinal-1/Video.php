<?php

    require_once "AcoesVideo.php";

    class Video implements AcoesVideo{

        private $titulo;
        private $avaliacoes;
        private $views;
        private $curtidas;
        private $reproduzindo;

        //Método Construtor
        public function __construct($titulo)
        {
            $this->setTitulo($titulo);        
            $this->setAvaliacoes(1);
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }

        //Implementando Métodos abstratos da Interface AcoesVideos
        public function play(){
            $this->setReproduzindo(true);
        }
        public function pause(){
            $this->setReproduzindo(true);
        }
        public function like(){
            $this->setCurtidas($this->getCurtidas() + 1);
        }

        //Métodos Getters/Setters
        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getAvaliacoes(){
            return $this->avaliacoes;
        }
        public function setAvaliacoes($avaliacoes){
            $this->avaliacoes = $avaliacoes;
        }

        public function getViews(){
            return $this->views;
        }
        public function setViews($views){
            $this->views = $views;
        }

        public function getCurtidas(){
            return $this->curtidas;
        }
        public function setCurtidas($curtidas){
            $this->curtidas = $curtidas;
        }

        public function getReproduzindo(){
            return $this->reproduzindo;
        }
        public function setReproduzindo($reproduzindo){
            $this->reproduzindo = $reproduzindo;
        }



    }
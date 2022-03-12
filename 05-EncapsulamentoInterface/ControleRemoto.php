<?php
    require_once "Controlador.php";

    class ControleRemoto implements Controlador{
        
        //Atributos
        private $volume;
        private $ligado;
        private $tocando;

        //Métodos especiais

        public function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        //---------------------------------------------------------------------------------
        private function getVolume(){
            return $this->volume;
        }
        private function setVolume($volume){
            $this->volume = $volume;
        }
        //---------------------------------------------------------------------------------
        private function getLigado(){
            return $this->ligado;
        }
        private function setLigado($ligado){
            $this->ligado = $ligado;
        }
        //---------------------------------------------------------------------------------
        private function getTocando(){
            return $this->tocando;
        }
        private function setTocando($tocando){
            $this->tocando = $tocando;
        }
        //---------------------------------------------------------------------------------

        //Métodos a Interface Controlador

        public  function ligar(){
            $this->setLigado(true);
        }
        public  function desligar(){
            $this->setLigado(false);
        }
        public  function abrirMenu(){
            echo "<p>-----MENU-----</p>";
            echo "<br>Está ligado? - ".($this->getligado() ? "Sim": "Não");
            echo "<br>Está tocando? - ".($this->getTocando() ? "Sim":"Não");
            echo "<br>Volume: ". $this->getVolume();

            for ($i = 0; $i <= $this->getVolume(); $i += 5){
                echo "   <strong>|</strong> ";
            }
            echo "<br>";

        }
        public  function fecharMenu(){
            echo "<br>Fechando Menu...";
        }
        public  function maisVolume(){
            if ($this->getLigado() && $this->getVolume() <= 100){
                $this->setVolume($this->getVolume() + 10);
            }else{
                echo "<br>ERRO! Não posso aumentar o volume";
            }
        }
        public  function menosVolume(){
            if ($this->getLigado() && $this->getVolume() >= 5){
                $this->setVolume($this->getVolume() - 5);
            }else{
                echo "<br>ERRO! Não posso diminuir o volume";
            }
        }
        public  function ligarMudo() {
            if ($this->getLigado() && $this->getVolume() > 0){
                $this->setTocando(true);
            }
        }
        public  function desligarMudo(){
            if ($this->getLigado() && $this->getVolume() <= 0){
                $this->setTocando(true);
            }
        }
        public  function play(){
            if ($this->getLigado() && ! $this->getTocando()){
                $this->setTocando(true);
            }
        }
        public  function pause(){
            if ($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }






    }
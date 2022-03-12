<?php
    class Caneta{
        public $cor;
        public $modelo;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function tampar(){
            $this -> tampada = true;
        }

        public function destampar(){
            $this -> tampada = false;
        }

        public function rabiscar(){

            if ($this -> tampada == true){
                echo "<p>Não posso rabiscar!</p>";
            }else{
                echo "<p>Estou rabiscando...</p>";
            }
        }
    }
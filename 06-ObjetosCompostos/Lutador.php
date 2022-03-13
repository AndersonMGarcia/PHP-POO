<?php

    class Lutador{
        //Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //Método Construtor
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
        {
            $this->nome = $nome;        
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }
        //------------------------------Métodos--------------------------------------------
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        //---------------------------------------------------------------------------------
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        //---------------------------------------------------------------------------------
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
        //---------------------------------------------------------------------------------
        public function apresentar()
        {
            echo "<hr>";
            echo " Lutador: " .$this->getNome();
            echo "<br> Origem: ".$this->getNacionalidade();
            echo "<br> Idade: ". $this->getIdade()." anos";
            echo "<br> Altura: ". $this->getAltura(). " m";
            echo "<br> Pesando: ". $this->getPeso(). " Kg";
            echo "<br> Vitórias: " . $this->getVitorias();
            echo "<br> Empates: ". $this->getEmpates();
            echo "<br> Derrotas: ". $this->getDerrotas();
            echo "<hr>";
            
        }
        //---------------------------------------------------------------------------------
        public function status(){
            //echo "<hr>";
            echo $this->getNome();
            echo "<br> É um peso ". $this->getCategoria();
            echo "<br>". $this->getVitorias(). " vitórias";
            echo "<br>". $this->getDerrotas(). " derrotas";
            echo "<br>". $this->getEmpates(). " empates";
            echo "<hr>";
        }

        //-------------------------------Métodos Especiais---------------------------------
        public  function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        //---------------------------------------------------------------------------------
        public function getNacionalidade(){
            return $this->nacionalidade;
        }
        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        //---------------------------------------------------------------------------------
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        //---------------------------------------------------------------------------------
        public function getAltura(){
            return $this->altura;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
        //---------------------------------------------------------------------------------
        public function getPeso(){
            return $this->peso; 
        }
        public function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
        }
        //---------------------------------------------------------------------------------
        public function getCategoria(){
            return $this->categoria;
        }
        
        private function setCategoria(){
            if ($this->getPeso() < 52.2){
                $this->categoria = "Inválido";
            }else if($this->getPeso() <= 70.3){
                $this->categoria = "Leve";
            }else if($this->getPeso() <= 83.9){
                $this->categoria = "Médio";
            }else if($this->getPeso() <= 120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }
        }
        //---------------------------------------------------------------------------------
        public function getVitorias(){
            return $this->vitorias;
        }
        public function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        //---------------------------------------------------------------------------------
        public function getDerrotas(){
            return $this->derrotas;
        }
        public function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        //---------------------------------------------------------------------------------
        public function getEmpates(){
            return $this->empates;
        }
        public function setEmpates($empates){
            $this->empates = $empates;
        }

    }
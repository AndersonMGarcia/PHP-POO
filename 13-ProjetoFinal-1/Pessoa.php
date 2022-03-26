<?php

    abstract class Pessoa{
        
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;   
        
        
        //Método Construtor
        public function __construct($nome, $idade, $sexo)
        {
            $this->setNome($nome);        
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }
        
        //Métodos
        protected function ganharExp($experiencia){
            $this->setExperiencia($this->getExperiencia() + $experiencia);
        }

        //Métodos Getters/Setters
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        public function getExperiencia(){
            return $this->experiencia;
        }
        public function setExperiencia($experiencia){
            $this->experiencia = $experiencia;
        }
    }
    
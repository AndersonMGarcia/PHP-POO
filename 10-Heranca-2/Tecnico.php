<?php

    require_once "Aluno.php";

    class Tecnico extends Aluno{

        private $registroProfissional;
        
        //Método Construtor
        public function __construct()
        {
            
        }

        //Métodos
        public function praticar(){
            echo "<br>". $this->getNome(). " está praticando!";
        }

        //Métodos Getters/Setters
        public function getRegistroPro(){
            return $this->registroProfissional;
        }
        public function setRegistroPro($registroProfissional){
            $this->registroProfissional = $registroProfissional;
        }
    }
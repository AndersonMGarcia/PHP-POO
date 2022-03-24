<?php

    require_once "Lobo.php";

    class Cachorro extends Lobo{

        //Sobrepor
        public function emitirSom()
        {
            echo "<br>Au Au Au Au Au Au!";
        }

        //Método de sobrecarga (Reagir) - o php nao suporta sobrecarga de métodos - criar funções com nomes diferentes

        public function reagirFrase($frase){

            if ($frase == "Toma Comida!" || $frase == "Olá"){
                echo "<br>Abanar e latir";
            }else{
                echo "<br>Rosnar";
            }

        }

        public function reagirHora($hora, $min){
            
            if ($hora < 12){
                echo "<br>Abanar";
            }else if ($hora >= 18){
                echo "<br> Ignorar";
            }else{
                echo "<br>Abanar e latir";
            }
        }

        public function reagirDono($dono){

            if ($dono){
                echo "<br>Abanar";
            }else{
                echo "<br>Rosnar e latir";
            }
        }

        public function reagirIdade($idade, $peso){

            if ($idade < 5){
                if ($peso < 10){
                    echo "<br>Abanar";
                }else{
                    echo "<br>Latir";
                }
                
            }else{
                if ($peso < 10){
                    echo "<br>Rosnar";
                }else{
                    echo "<br>Ignorar";
                }    
            }
        }


        
    }
    
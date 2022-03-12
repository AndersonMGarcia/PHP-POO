<?php

    class ContaBanco{

        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);            

        }
        //--------------------------------------------------------------------------------
        public function getNunConta(){
            return $this->numConta;
        }
        public function setNumConta($numConta){
            $this->numConta = $numConta;
        }
        //--------------------------------------------------------------------------------
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        //--------------------------------------------------------------------------------
        public function getDono(){
            return $this->dono;
        }
        public function setDono($dono){
            $this->dono = $dono;
        }
        //--------------------------------------------------------------------------------
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }
        //--------------------------------------------------------------------------------
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        //--------------------------------------------------------------------------------
        public function abrirConta($t){
            
            $this->setTipo($t);
            $this->setStatus(true);
            

            if ($this->getTipo() == "CC"){

                $this->setSaldo(50);

            }elseif($this->getTipo() == "CP"){

                $this->setSaldo(150);
            }
        }
        //--------------------------------------------------------------------------------
        public function fecharConta(){

            if ($this->getSaldo() > 0){
                echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
            }else if ($this->getSaldo() < 0){
                echo "<p>Conta está em débito, impossível encerrar!</p>";
            }else{
                $this->setStatus(false);
            }
        }
        //--------------------------------------------------------------------------------
        public function depositar($valor){

            if ($this->getStatus() == true){

                $this->setSaldo($this->getSaldo() + $valor);

                echo "<p>Depósito de R$ ".number_format($valor, 2, ",",".")." na conta de {$this->getDono()} </p>";
            }else{
                echo "<p>Impossível depositar, conta fechada!</p>";
            }
        }
        //--------------------------------------------------------------------------------
        public function sacar($valor){

            if ($this->getStatus()){

                if ($this->getSaldo() >= $valor){
                    $this->setSaldo($this->getSaldo() - $valor);
                    echo "<p>Saque autorizado de R$ ".number_format($valor, 2, ",",".")." na conta doª {$this->getDono()}.</p>";
                    
                }elseif($this->getSaldo() < $valor){
                    echo "<p>Saldo insufuciente!</p>";
                }
            }else{
                echo "<p>Conta fechada, impossível sacar!</p>";
            }
        }
        //--------------------------------------------------------------------------------
        public function pagarMensal(){

            $mensal = 0;

            if ($this->getTipo() == "CC"){
                $mensal = 12;
                
            }elseif($this->getTipo() == "CP"){                 
                $mensal = 20;
                
            }

            if ($this->getStatus()){
                
                if ($this->getSaldo() > $mensal){
                    $this->setSaldo($this->getSaldo() - $mensal);

                    echo "<p>Mensalidade de R$ ".number_format($mensal, 2, ",", ".")." debitada na conta de {$this->getDono()}</p>";
                }else{
                    echo "Saldo insuficiente!";
                }
            }else{
                echo "Problemas com a conta, impossível pagar!";
            }
        }
    }

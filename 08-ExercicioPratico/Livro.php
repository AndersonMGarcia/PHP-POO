<?php
require_once "Publicacao.php";
require_once "Pessoa.php";

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Método Construtor

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->setTitulo($titulo);                       
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setLeitor($leitor);
        $this->setPagAtual(0);
        $this->setAberto(false);
    }

    public function detalhes(){
        echo "<hr>";
        echo "Livro: ". $this->getTitulo();
        echo "<br>Autor: ". $this->getAutor()."<br>";
        echo "Páginas: ". $this->getTotPaginas(). "<br>"; 
        echo "Pág. Atual: ". $this->getPagAtual();
        echo "<br>Leitor: ". $this->getLeitor()->getNome();
        echo "<hr>";
    }

    //Métodos da Interface Publucação

    public function abrir(){
        $this->setAberto(true);       
    }

    public function fechar(){
        $this->setAberto(false);
    }

    public function folhear($pag){
        if ($pag > $this->totPaginas){
            $this->pagAtual = 0;        
        }else{
            $this->pagAtual = $pag;
        }
    }

    public function avancarPage(){
        
        if ($this->getPagAtual() === $this->getTotPaginas()){
            $this->setPagAtual($this->getTotPaginas());
        }else{
            $this->setPagAtual($this->getPagAtual() + 1);     
        }
    }

    public function voltarPage(){

        if ($this->getPagAtual() <= 0){
            $this->setPagAtual(0);
        }else{
            $this->setPagAtual($this->getPagAtual() -1);
        }

        
    }

    //Métodos Getters/Setters

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }


    
    

}
<?php
class Pessoa
{
    private $nome;
    private $idade;
    private $peso;
    private $altura;

    // contrutor
    public function __construct($nome = "", $idade = 0, $peso = 0, $altura = 0)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getPeso()
    {
        return $this->peso;
    }

    public function getAltura(){
        return $this->altura;
    }

    // Setters
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function setPeso($peso){ // -5
        // if($peso <= 0){
        //     $this->peso = 0;
        //     return;
        // }
        $this->peso = $peso;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }
}

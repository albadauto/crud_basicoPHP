<?php

class Cliente{
    private $nome;
    private $cpf;
    private $endereco;


    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        return $this->nome = $n;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($n){
        return $this->cpf= $n;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($n){
        return $this->endereco = $n;
    }
}
<?php
require_once('dados.php');
class Banco extends Cliente{
    private $conexao;
    private $retorno;

    public function getConexao(){
        return $this->conexao;
    }
    public function setConexao($c){
        return $this->conexao = $c;
    }

    public function getRetorno(){
        return $this->retorno;
    }
    public function setRetorno($c){
        return $this->retorno = $c;
    }

    public function Conecta(){
        try{
        $this->setConexao(mysqli_connect("localhost", "adauto", "200101", "bd_crud"));
        }catch(Exception $e){
            echo $e;
        }
        

    }
    
    public function Create(){
        $this->Conecta();
        $retorno = mysqli_query($this->conexao, "INSERT INTO tb_cliente(tb_nome, tb_cpf, tb_endereco) VALUES ('".$this->getNome()."', '".$this->getCpf()."','".$this->getEndereco()."')");
        if($retorno){
            echo "Cadastrado";
        }else{
            echo "Deu merda: " . mysqli_error($this->getConexao());
        }
    }

    public function Read(){
        $this->Conecta();
        $this->retorno = mysqli_query($this->conexao, "SELECT * FROM tb_cliente");
    }

    public function Delete($id){
        $this->Conecta();
        $del = mysqli_query($this->conexao, "DELETE FROM tb_cliente WHERE id=$id");
        if(!$del){
            echo "Deu merda: " . mysqli_error($this->conexao);
        }else{
            echo "Deletado com sucesso";
        }
    }

    public function Update(){
        //COMING SOON
    }
}


<?php
    require_once('../model/bancodedados.php');
    $dados = new Banco();
    $dados->setNome($_POST['box_nome']);
    $dados->setEndereco($_POST['box_endereco']);
    $dados->setCpf($_POST['box_cpf']);

    if(!empty($_POST['box_id'])){
        $dados->Update($_POST['box_id'], $dados->getNome(), $dados->getCpf(), $dados->getEndereco());
    }else{
      $dados->Create();
    }
    
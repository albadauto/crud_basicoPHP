<?php
    require_once('../model/bancodedados.php');

    $dados = new Banco();
    $dados->setNome($_POST['box_nome']);
    $dados->setEndereco($_POST['box_endereco']);
    $dados->setCpf($_POST['box_cpf']);
    $dados->Create();
    header("Location: ../view/pagina.html");
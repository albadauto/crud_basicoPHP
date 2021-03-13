<?php

require_once('../model/bancodedados.php');

$idDelete = $_POST['box_deletar'];

$deletar = new Banco;
$deletar->Delete($idDelete);
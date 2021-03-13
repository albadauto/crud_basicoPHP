<?php

require_once('../model/bancodedados.php');
require_once('../model/dados.php');

$banco = new Banco();
$banco->Read();
$lista = $banco->getRetorno();
echo "<table width='467' border='1px'>";
echo "<h3>";
echo "<tr>";
      echo "<td> " . "ID ". "</td>";
      echo "<td>"."Nome " . "</td>";
      echo "<td>"."Cpf " . "</td>";
      echo "<td>"."Endereco " . "</td>";
   echo "</tr>";
while($lista = mysqli_fetch_array($banco->getRetorno())){
   echo "<tr>";
      echo "<td>". $lista['id'] . "</td>";
      echo "<td>". $lista['tb_nome'] . "</td>";
      echo "<td>". $lista['tb_cpf'] . "</td>";
      echo "<td>". $lista['tb_endereco'] . "</td>";
   echo "</tr>";
}
echo "</table>";
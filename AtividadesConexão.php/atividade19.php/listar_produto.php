<?php 
include"banco.php";

$sql = "SELECT * FROM produtos";

$resultado = $conexao->query($sql);

while ($produto = $resultado -> fetch_assoc()) {
      echo"Nome Produto:" .$produto['nome_produto']. "<br>";
      echo"Quantidade:".$produto['quantidade']. "<br>";
      echo"preco:".$produto['preco']. "<br>";

}
?>
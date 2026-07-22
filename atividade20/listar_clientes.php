<?php 

include "banco.php";

$sql = "SELECT * FROM form";

$resultado = $conexao->query($sql);

while ($cliente = $resultado->fetch_assoc()) {
echo "Nome Completo: ". $cliente['nome']. "<br>";
echo "Idade: ". $cliente['idade']. "<br>";
echo "E-mail: ". $cliente['email']. "<br>";
echo "telefone: ". $cliente['telefone']. "<br>";
echo "Cidade: ". $cliente['cidade']. "<br>";



echo "<a href='editar_clientes.php?id=".$cliente['id']."'> <button> Atualizar </button> </a>";

echo "<hr>";

}
?>
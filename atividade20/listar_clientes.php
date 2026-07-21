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

echo "<a href='editar_cliente.php?id=" . $cliente["id"] . "'>Editar</a><br>";

echo "<hr>";

}
?>
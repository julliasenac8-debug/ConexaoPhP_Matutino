<?php 

include "banco22.php";

$sql = "SELECT * FROM funcionarios";

$resultado = $conexao->query($sql);

while ($funcionarios = $resultado->fetch_assoc()) {
echo "nome_completo: ". $funcionarios ['nome_completo']. "<br>";
echo "cargo: ". $funcionarios ['cargo']. "<br>";
echo "departamento: ". $funcionarios ['departamento']. "<br>";
echo "salario: ". $funcionarios ['salario']. "<br>";
echo "data_de_admissao: ". $funcionarios ['data_de_admissao']. "<br>";



echo "<a href='editar_funcionarios.php?id=".$funcionarios['id']."'> <button> Atualizar </button> </a>";

echo "<hr>";

}
?>
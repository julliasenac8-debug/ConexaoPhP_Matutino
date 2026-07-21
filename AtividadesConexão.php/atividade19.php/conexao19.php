
        <?php
        include "conexao19.php";

        $nome = $_POST['nome_produto'];
        $quantidade = $_POST['quantidade'];
        $preco= $_POST['preco'];

        $sql = "INSERT INTO produtos(nome_produto, quantidade, preco) 
VALUES ($nome, $quantidade, $preco)";

        $conexao->query($sql);

        



        ?>
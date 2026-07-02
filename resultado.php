<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
</head>

<body>

    <h1>Resultado da Soma</h1>

    <p>

        <?php
        include "conexao.php";

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $soma = $num1 + $num2;

        $sql = "INSERT INTO soma (numero1, numero2, resultado) 
VALUES ($num1, $num2, $soma)";

        $conexao->query($sql);

        echo "O resultado do primeiro: $num1 e do segundo: $num2 é: $soma";



        ?>
    </p>
</body>

</html>
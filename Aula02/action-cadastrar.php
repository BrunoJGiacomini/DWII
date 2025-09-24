<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="action.css">
</head>
<body>
    <?php
    $nome = $_POST['txtNome'];
    $idade = $_POST['numberIdade'];
    $profissao = $_POST['profissao'];
    $salario = $_POST['numberSalario'];

    echo("Bem-Vindo, $nome<br>Idade: $idade anos<br>Profissão: $profissao<br>Salário: R$ "  . number_format($salario, 2, ',', '.'));
    ?>

    <div class = "button">
        <a href="index.html"><button type="button">Voltar</button></a>
    </div>
</body>
</html>
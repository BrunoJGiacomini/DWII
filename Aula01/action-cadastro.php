<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php
        $nome = $_GET['txtNome'];
        $idade = $_GET['txtIdade'];
        $sexo = $_GET['sexo'];
        $civil = $_GET['estCivil'];

        echo("Bem-Vindo $nome<br> Idade: $idade anos <br>Sexo: $sexo <br>Estado Civil: $civil");

    ?>

    <p>
        <a href="formulario.html"><button type="button">Voltar</button></a>
    </p>
</body>
</html>
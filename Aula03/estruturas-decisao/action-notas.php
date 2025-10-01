<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php
        $nome = $_POST['txtNome'];
        $nota1 = $_POST['numberNota1'];
        $nota2 = $_POST['numberNota2'];
        $nota3 = $_POST['numberNota3'];
        $nota4 = $_POST['numberNota4'];

        $media = ($nota1+$nota2+$nota3+$nota4)/4;

        echo("Nome do aluno: ".$nome);
        echo("<br>A média final do aluno: ".$media);

        if($media>=7){
            echo("<br>Status: <span style= 'color: green;'>Aprovado</span>");
        }
        else if($media<7 && $media >=5){
            echo("<br>Status: <span style= 'color: red;'>Desaprovado</span>");
        }
        else{
            echo("<br>Status: <span style= 'color: yellow;'>Recuperação</span>");
        }
    ?>
    <div class="button2">
        <a href="index.html"><button type="button">Voltar</button></a>
    </div>
</body>
</html>
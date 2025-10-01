<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados e a Lógica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table style="border-collapse: collapse;">
        <?php 
        $numInicial = $_POST['nInicial'];
        $numFinal = $_POST['nFinal'];

        for($i = $numInicial; $i <= $numFinal; $i++){
            echo("<tr><td style = 'border: 1px solid'>");
            echo($i ."<br>");
            echo("</tr></td>");
        }
    ?>
    </table>
    
</body>
</html>
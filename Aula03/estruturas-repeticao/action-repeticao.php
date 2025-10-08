<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados e a Lógica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table style="border-collapse: collapse; width: 180px;">
<?php 
$num = $_POST['nInicial'];


echo ("<tr><td style = 'border: 1px solid black ; text-align: center; background-color: #5f9ea0; color:#fff; font-size: 18px'>");
echo ("Tabuada do " . $num);
echo ("</td></tr>");


for ($i = 0; $i <= 10; $i++) {

     $bgColor = ($i % 2 == 0) ? '#f5f5dc' : '#fff';
     echo("<tr style = 'background-color: $bgColor;'><td style = 'border: 1px solid; text-align: center; font-size: 18px'>");
        echo($num . " X " . $i . " = " .($num * $i) ."<br>");
        echo("</td></tr>");
}
?>
</table>
    
</body>
</html>
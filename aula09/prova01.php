<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova calcular média do aluno</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
        <h1>Calcule a média do aluno</h1>

        <?php

        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0.0;
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0.0;

        $m = ($n1 + $n2)/2;

        echo "A Sua média é $m";

        if($m <= 5) {
            $media = "REPROVADO!";
        } elseif ($m <= 7) {
            $media = "RECUPERAÇÃO!";
        } else {
            $media = "APROVADO!";
        }




      echo "<br>Situação : $media";


       ?>


    <p><a href="prova01.html">voltar</a></p>






    
</body>
</html>
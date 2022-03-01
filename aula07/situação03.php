<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação média aluno</title>
    <style>
        
        *{
            padding:0;
            margin:0;
        }
        h1 {
            background-color: gray;
            color:white;
        }

        body {
            background-color: lightgray;
        }








    









    </style>

</head>
<body>
    <div>
    <?php

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];

    $m = ($nota1+$nota2)/2;

    echo "A média entre $nota1 e $nota2 e $m";

    
    echo "<br>A situação do aluno e ". (($m<6)? " <br>REPROVADO" : "APROVADO");









    ?>
    </div>











    
</body>
</html>
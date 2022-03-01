<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto Obrigatório ou não</title>
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
    $ano = $_GET["an"];
    $idade = 2022 - $ano;

    echo "quem nasceu em $ano tem idade de $idade anos";

    $tipo = ($idade >= 18 && $idade <65)?"Obrigatório" : "Não Obrigatório";

    echo "<br> seu voto é $tipo";






    ?>
    </div>





    
</body>
</html>
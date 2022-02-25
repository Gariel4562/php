<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operação 01</title>
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
    <h1>curso em video para iniciantes gustavo guanabara</h1>
    <?php 

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];



    $tipo = $_GET["op"];

    echo "Os valores foram $n1, $n2 ";
    $r = ($tipo== "s") ? $n1+$n2 : $n1*$n2;

    echo "<br> O resultado será $r."



   ?>





    
</body>
</html>
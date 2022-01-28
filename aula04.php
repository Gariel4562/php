<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando as variaveis com concatenação</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;

        }

        div {
            width:600px;
            height:600px;
            background-color: darkgray;
            margin:auto;
            line-height: 600px;
            border-radius: 600px;


        }

        




    </style>
    

</head>
<body>
    <div>
    <?php 
    $nome = 'Maria';
    $idade = 18; 
    echo "$nome tem $idade anos de idade"

    


    ?>

</div>
    
</body>
</html>
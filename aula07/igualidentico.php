<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual identico php</title>
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

   <h1>Igual identico</h1>
    
<div>
    <?php 
    $a = 3;
    $b = "3";

    $r = ($a === $b)? "sim":"não";

    echo "As variaveis A e B são iguais? $r";







     ?>

</div>








    
</body>
</html>
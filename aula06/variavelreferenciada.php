<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel referenciada</title>
    <style>
        body {
            background-color: aqua;
            text-align: center;

        }

        div {
            width:600px;
            height:600px;
            background-color: darkgray;
            border-radius: 20px;
            margin:auto;
        
            


        }

        

        




    </style>


</head>
<body>
    <h1>Variavel referenciada</h1>

    <div>


        <?php
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "a váriavel a vale $a";
        echo "<br>a váriavel b vale $b";
        ?>
    






</div>




















    
</body>
</html>
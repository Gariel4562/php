<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis de variaveis</title>
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
    <h1>Variaveis de variaveis</h1>

    <div>
        <?php 

        $x = "abc";
        $$x = "def";

        echo "O conteudo da variavel x é $x";

        echo "<br> A variavel abc criada recebeu o valor $abc";
        








       ?>








    </div>





    
</body>
</html>
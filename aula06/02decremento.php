<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decremento</title>
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

    <div>
    <?php
    $atual = $_GET["aa"]; // Pega o ano da URL
    echo "o Ano atual é $atual e o ano anterior é " . --$atual; // vai imprimir a mensagem. 



     






?>

</div>






    
</body>
</html>
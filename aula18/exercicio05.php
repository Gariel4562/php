<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chaves associativas</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <pre>
    <?php

         $v = array("nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65.5);
                   

                foreach($v as $k => $c) {
                    echo "O campo $k possui o conteudo $c<br/>";
                    
                }
                







    ?>
    </pre>






    
</body>
</html>
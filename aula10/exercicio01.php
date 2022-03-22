<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <h1>Resultado</h1>
    <?php
    $n = isset($_GET["num"])?$_GET["num"]:0;
    $o = isset($_GET["oper"])?$_GET["oper"]:0;

    switch ($o) {
    case 1 :
        $r = $n * 2;
        break;
    case 2 : 
        $r = $n ^ 3;
        break;
    case 3 :
        $r = sqrt($n); // $n ^ 1/2;

    }

    echo "O resultado da Operação deu $r"



    ?>
    <br> <br> <br>
    <a href="exercicio01.html" class="botao">voltar</a>





    
</body>
</html>
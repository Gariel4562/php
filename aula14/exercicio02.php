<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retorno com return</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <?php
    function soma ($a, $b) {
        return $a + $b ;
    }
    
    
    $x = 3;
    $y = 8;
    $r = soma ($x, $y);
    echo "A soma entre $x + $y é igual a $r";













   ?>





    
</body>
</html>
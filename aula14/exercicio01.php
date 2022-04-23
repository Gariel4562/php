<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções em php sem return</title>
    <link rel="stylesheet" href="estilo/style.css">
    
</head>
<body>
    <?php

        function soma ($a, $b) {
            $s = $a + $b ;
            echo "<p>$a + $b é igual a $s<p/>";
        }
        // v soma 1
         
        soma (3,4);

        // v soma 2

        soma (8, 2);
        
        // v Soma 3
        $x = 9;
        $y = 15;
        soma ($x, $y);









     ?>








    
</body>
</html>
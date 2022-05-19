<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vetores com chaves personalizadas</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <pre>
    <?php
       $v = array(3=>5, 
                  1=>9,
                  0=>8,
                  7=>7);
                  $v [] = "e";

                  unset($v[8]); //para remover a posição 8 do vetor

                  

         print_r($v);




   ?>
   </pre>




    
</body>
</html>
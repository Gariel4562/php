<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado aula03</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>

<?php

        $in = $_GET["inicio"] ? $_GET["inicio"] : 0;
        $fim = $_GET["fina"] ? $_GET["fina"] : 0;
        $inc = $_GET["incremento"] ? $_GET["incremento"] : 0;
 
 
       echo "$in ";
 
       if($in < $fim)   /* Essa condição é para especificar que haverá uma incrementação */
       {
        while($in <= $fim)
        { 
         $in += $inc;
  
         if($in <= $fim)
         {
          echo "$in ";
         }
       }
      }
        else      /* Nesse caso, essa condição é para especificar que haverá uma decrementação */
        {
         while($in >= $fim)
         { 
         $in -= $inc;
  
          if($in >= $fim)
          {
           echo "$in ";
           }
           } 
  
  
            }
 
        ?>
           
    




    
</body>
</html>
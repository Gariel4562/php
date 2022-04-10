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
             $fator=isset($_GET["t"])?$_GET["t"]:1;
             
             echo "<h3>Mostrando a Tabuada do $fator</h3>";
             
             $cont=1;



              do { echo "$fator X $cont = " .($fator*$cont);
          echo "</br>";
        $cont++;
       }  while ($cont <= 10);
 
 ?>   
 


 <br> <br>
  <a href="exercicio03.html" class="botao">voltar</a>







    
</body>
</html>
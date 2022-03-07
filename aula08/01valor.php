<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código php do formulário</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>


<?php 

$valor = $_GET["v"];
$rq = sqrt($valor);
    
   echo "O valor enviado foi $valor";
   echo "<br> A Raiz quadrada de valor é igual a " . number_format($rq, 2);




?>

<a href="01exercicio.html"> <br> <br> Voltar</a>


    





</body>
</html>




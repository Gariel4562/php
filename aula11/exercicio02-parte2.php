<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado exercicio 02</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <?php

    $i = 1;
    while ($i <= 5) {
        $v = "num".$i;
        $url = "v". $i;
        $$v = isset($_GET["$url"])?$_GET["$url"]:0; // variavel da variavel vai criar num 1 repetição que acontece 5 vezes
        $i++;


    } // < Pega os dados da url


    $i = 1;
	while ($i <=5){
		$v = "num".$i;
		echo "Valor $i : " . $$v . "<br/>";
		$i++;
	} // < Pega os dados e mostra na tela






  

 
    ?>




    
</body>
</html>
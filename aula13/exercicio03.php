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
    $n = isset($_GET["n"])?$_GET["n"]:"0";         //Recebe numero do formulario
    $cp= 0;                                                             //Contador de Numeros Primos, recebendo valor 0

    echo "Analisando o numero    : $n <br/>";  //Exibe o numero a ser consultado
    echo "Numeros Multiplos      :         ";           //Exibe o texto  "Numeros Multiplos: "
    for($p=1; $p<=$n;$p++){                               //Pega os numeros que passarão pela condição "if"
        if( $n%$p == 0){                                          //Verifica se o número informado  tem o resto da divisão ==0
        echo  "$p " ;                                                 //Exibe os números que atendenderam à condição "if"
        $cp++;                                                          //$cp Contador de Primos, conta quantos primos atenderam à condição "if"
        }                                                                    //à cada loop executado ele adiciona +1
     }

    echo "<br />";
    echo "Total multiplos: $cp  <br/><br/>";   //Exibe a quantidade de numeros multiplos
    if($cp==2){                                                     //Verifica se o contador de primos é "igual" à 2, se sim
    echo "Resultado: "."E PRIMO!";                   //Exibe a mensagem "E PRIMO!
            }
    else {                                                               //Caso contador de primos seja diferente de 2
    echo "Resultado: "."NAO E PRIMO!";         //Exibe a mensagem "NAO E PRIMO!"
    }



 
 
 
   ?>

    <br> <br>

    <a href="exercicio03.html"class="botao">voltar</a>





    
</body>
</html>
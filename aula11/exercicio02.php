<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    
    
    
        <form action="exercicio02-parte2.php"method="get">
        <?php
        $c = 1;

        while($c <= 5) {
           echo "valor $c : <input type='number' name='v$c' id='v$c' max='100' min='0' value='0'/> <br>";
           $c++;
        }
            ?>
            
            <input type="submit" value="Enviar" class="botao">
       
        </form>






    



    
</body>
</html>
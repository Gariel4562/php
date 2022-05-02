<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>printf</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <?php
    $pro = "leite";
    $pre = 4.5;

  //  echo "O $pro custa R$ " . number_format($pre,2);

  printf ("O %s custa R$ %.2f", $pro, $pre);






    ?>





    
</body>
</html>
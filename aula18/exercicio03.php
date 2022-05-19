<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <pre>
        <table border="1"> <tr>
    <?php
    $c = range(5,20,2);
    foreach($c as $valor) {
        echo "<td> $valor ";
    }

    ?>
    </table>
    </pre>




    
</body>
</html>
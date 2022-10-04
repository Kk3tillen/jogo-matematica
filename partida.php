<?php
    $n1 = rand(1,99);
    $n2 = rand(1,99);

    $operacao = $_POST;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/stylepartida.css">
</head>
<body>
    <nav>
        <a href="index.html"><img src="img/home.svg" alt="tela inicial" width= 50px></a>
    </nav>
    <h1>Nova partida</h1>
    <div class="partidas">
        <div class="numeros"> 
            <span><?php echo $n1;?></span>
            <span>×<span>
            <span><?php echo $n2;?></span>
            <span>=</span>
        </div>
        <div class="resultado">
            <input class="form" type="number">
            <button class="btn" type="button">Calcular</button> 
     </div>
    </div>
</body>
</html>
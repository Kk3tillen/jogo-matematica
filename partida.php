<?php
    $op = $_GET['operacao'];
    $n1 = rand(1, 99);
    $n2 = rand(1, 99);
    
    if ($op == 'soma')
    {
        $op = '+';
    }
    else if ($op == 'subtração')
    {
        $op = '-';
    }
    else if ($op == 'divisão')
    {
        $op = '÷';
    }
    else
    {
        $op = '×';
    }
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
            <span><?php echo $op; ?><span>
            <span><?php echo $n2;?></span>
            <span>=</span>
        </div>
        <div class="resultado">
            <form method="POST" action="/resultado.php?n1=<?=$n1?>&n2=<?=$n2?>&op=<?=$_GET['operacao']?>">
            <input class="form" type="number" name="resposta">
            <button class="btn" type="submit">Calcular</button> 
     </div>
    </div>
</body>
</html>
<!-- faça um programa em que o usuario informe dois numeros
e o programa faça a soma destes numeros. --> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.php" method="get">
    Primeiro Número:<br/>
    <input type="number" name="num1" placeholder="Digite o 1ª numero"/>
    <br/> <br/>

    Segundo Número:<br/>
    <input type="number" name="num2" placeholder="Digite o 2ª numero"/>
    <br/> <br/>

    <input type="submit" value="Calcular">

    <?php
    //pegar dados do formulário
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];

    //processando
    $somar = $n1 + $n2;
    $subtrair = $n1 - $n2;
    $multiplicar = $n1 * $n2;
    $dividir = $n1 / $n2;

    //Saída 
    echo"<br/> A soma de"  .$n1. "com"  .$n2. "é:" .$somar;
    echo"<br/> A subtração de"  .$n1. "com"  .$n2. "é:" .$subtrair;
    echo"<br/> A multiplicação de"  .$n1. "com"  .$n2. "é:" .$multiplicar;
    echo"<br/> A divisão de"  .$n1. "com"  .$n2. "é:" .$dividir;
    ?>



    </form>    




</body>
</html>
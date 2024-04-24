<?php
//Operadores aritmeticos

//operador identidad + una variable puede tener valor positivo o negativo, incluso la variable puede ser negativa o positiva
//operador de negacion - al igual que en matematicas, se cumplen la ley de los signos
$numero = -56;
echo -$numero;

//operador de adicion +

$numero = 10;
$numero2 = 120;

echo $numero + $numero2;

//Operador de sustraccion
$numero = 10;
$numero2 = 120;

echo $numero - $numero2;

//Operador de multiplicacion

$numero = 10;
$numero2 = 120;

echo $numero * $numero2;

//Operador de division

$numero = 10;
$numero2 = 120;

echo $numero / $numero2;

//Operador de modulo, es el residuo de una division

$numero = 10;
$numero2 = 120;

echo $numero % $numero2;

//Operador de potencia

$numero = 10;
$numero2 = 120;

echo $numero ** $numero2;
?>


<?php

//ejemplo
if($_POST){

    $valorUno=$_POST['valorUno'];
    $valorDos=$_POST['valorDos'];
    
    $suma = $valorUno + $valorDos;
    $resta = $valorUno - $valorDos;
    $multiplicacion = $valorUno * $valorDos;
    $division = $valorUno / $valorDos;

    echo $suma."<br>";
    echo $resta."<br>";
    echo $multiplicacion."<br>";
    echo $division."<br>";
    
}
    
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="operador-aritmetico.php" method="post">
            Numero 1
            <input type="text" name="valorUno" id="">
            <br>
            Numero 2
            <input type="text" name="valorDos" id="">
            <br>
            <input type="submit" value="calcular">
        </form>
    </body>
</html>

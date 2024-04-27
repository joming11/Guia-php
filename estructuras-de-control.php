<?php

//Estructura de control
//If-else, else if

$promedio = 3;
$tieneFaltas = "no";
if($promedio>=7 && $tieneFaltas=="no"){
    echo "aprobaste la materia";
}else if($tieneFaltas=="si"){
    echo "reprobaste por faltas";
}else{
    echo "reprobaste por promedio";
}

// una forma corta de usar un condicional es con una operacion ternaria, pero solo es util cuando se va a imprimir mensajes, si se necesita mas codigo, es preferible usar if/else

echo ($promedio >= 7 && $tieneFaltas == "no") ? "aprobaste la materia" : "no aprobaste burro";


//Switch

$camisa = "verde";

switch($camisa){
    case "gris";
        echo "camisa gris";
        break;
    case "azul";
        echo "camisa azul";
        break;
    case "rojo";
        echo "camisa rojo";
        break;
    case "verde";
        echo "camisa verde";
        break;
}

//ejemplo de switch
/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="estructuras-de-control.php" method="post">
    <input type="submit" name="btnValor" value="1">
    <br>
    <input type="submit" name="btnValor" value="2">
    <br>
    <input type="submit" name="btnValor" value="3">
</body>
</html>

<?php

if($_POST){
    $boton = $_POST['btnValor'];

    switch($boton){

        case:1
        echo "presionaste el boton 1";
        break;

        case:2
        echo "presionaste el boton 2";
        break;

        case:3
        echo "presionaste el boton 3";
        break;
    }
}

?>
 */

//Match v8
//parecido al switch

$camisa = "verde";
echo match ($camisa) {
    "gris" => "camisa gris",
    "azul" => "camisa azul",
    "roja" => "camisa roja",
    "verde" => "camisa verde"
};

//Estructuras repetitivas
//ciclo while

$zapato = 0;

while($zapato<=100){
    echo "zapato numero: ", $zapato;
    ++$zapato;
}

//do while
$zapato = 0;

while($zapato<=10){
    echo "zapato numero: ", $zapato;
    ++$zapato;
}

echo $zapato;

do{
    echo "zapato numero: ",$zapato;
    ++$zapato;
}while($zapato<=10);

//ciclo for

for($i = 0;$i <= 10; $i++){
    echo "valor de la variable: ",$i;
}

//foreach - para iterar arreglos
$array=["raki","miguel","jose"];
$nombre="raki";

foreach($array as $nombre){
    echo "mi nombre es: ",$nombre;
}

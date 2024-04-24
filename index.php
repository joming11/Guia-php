<!-- guia personal de php 8 -->

<!-- formas de iniciar la interpretacion de codigo php -->
<!-- <?php ?> o <? ?> -->

<?php
/*
solo imprime una cadena
<?php
print "hola mundo";
?>

imprime las cadenas que se deseen
<?
echo "hola mundo","how are u";
?>

imprime cualquier tipo de dato
<?
print_r("hola mundo");
?>

- Comentarios en php
de una linea //
de varias lineas - igual que en css
*/
?>



//Concatenacion e interpolacion//

Concatenacion consiste en unir cadenas
<?php
$palabra = "codigo";
$palabra2 = "facil";

echo "hola ".$palabra.$palabra2;
?>

Interpolacion

<?php
$palabra = "codigo";
$palabra2 = "facil";

echo "hola $palabra $palabra2";
?>

otra forma de interpolacion

<?php
$palabra = "codigo";
// $palabra2 = "facil";

// la segunda variable ya no existe, se delimita la variable uno con llaves y se escribe el resto de lo que queremos escribir en la cadena

echo "hola {$palabra} facil";
?>




//Estructura de control
//If-else, else if

<?php

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

// echo ($promedio >= 7 && $tieneFaltas == "no") ? "aprobaste la materia" : "no aprobaste burro";

?>

//Switch

<?php

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
?>

//Match v8
//parecido al switch
<?php
$camisa = "verde";
echo match ($camisa) {
    "gris" => "camisa gris",
    "azul" => "camisa azul",
    "roja" => "camisa roja",
    "verde" => "camisa verde"
};
?>

//Estructuras repetitivas
ciclo while

<?php
$zapato = 0;

while($zapato<=100){
    echo "zapato numero: ", $zapato;
    ++$zapato;
}

//do while
$zapato = 0;

while($zapato<=100){
    echo "zapato numero: ", $zapato;
    ++$zapato;
}

echo $zapato;
do{
    echo "zapato numero: ",$zapato;
    ++$zapato;
}while($zapato<=100);
?>

//ciclo for
<?php
for($i = 0;$i <= 10; $i++){
    echo "valor de la variable: ",$i;
}

//foreach - para iterar arreglos
$array=["raki","miguel","jose"];
$nombre="raki";

foreach($array as $nombre){
    echo "mi nombre es: ",$nombre;
}
?>

//arreglos (array)
<!-- es una coleccion ordenada de datos. Los arreglos se emplean para mantener multiples valores en una sola variable. -->
<?php

$array=["raki","miguel","jose"];
$nombre="raki";

echo $array[0];
echo $array[2];

foreach($array as $index => $nombre){
    echo "mi nombre es: ",$nombre, " index: $index";
}

//Arreglos asociativos llave=>valor
$datos = [
    "nombre" => "Raki",
    "apellido" => "navas",
    "edad" => "33"
];

var_dump($datos);
//si se quiere solo un valor
var_dump($datos["apellido"]);

//recorremos el array
foreach($datos as $valor){
    echo $valor;
}

//si se quiere la llave => valor

foreach($datos as $key=>$valor){
    echo "$key: $valor";
}

//Agregar, eliminar y modificar datos de un arreglo

$alumnos = ["raki", "josé", "miguel"];
$datos = [
    "nombre" => "raki",
    "apellido" => "manzanilla",
    "ocupacion" => "mamá"
];

//para agregar un elemento -> array_push();

array_push($alumnos, "Angel");

$datos["ubicacion"] = "maracaibo";

var_dump($alumnos);
var_dump($datos);

//para borrar -> unset()

// unset($alumnos[1]);
// unset($datos["apellido"]);

// var_dump($alumnos);
// var_dump($datos);

//Modificar un valor

$alumnos = ["raki", "jocé", "miguel"];
$datos = [
    "nombre" => "raki",
    "apellido" => "manzanillo",
    "ocupacion" => "mamá"
];

var_dump($alumnos);
var_dump($datos);

// $alumnos="josé";
$datos["apellido"] = "manzanilla";

var_dump($alumnos);
var_dump($datos);


//funciones en arreglos
//count -> cuantos elementos hay en el arreglo

var_dump(count($alumnos));
var_dump(count($datos));

//ordenar -> asort, ordena alfabetica y numeros de menor a mayor

asort($alumnos);
asort($datos);

var_dump($alumnos);
var_dump($datos);

//ordenar de manera inversa ->arsort

//buscar una palabra dentro del array
//array_search
//que buscar, donde buscar

var_dump(array_search("raki",$alumnos));
var_dump($datos);

//remplazar un dato -> array_replace
//se indica el arrglo donde se a a cambiar y el valor de indexacion
// //$index=array_replace($alumnos, [
//     0=>"Raquel"
// ]);
?>

//Arreglos multidimensionales
//la indexacion ocurre a nivel de fila y columna

<?php

$animales = [
          //0      1           2
    /*0*/["puma", "pantera", "jaguar"],
    /*1*/["pato", "colibri", "tucan"],
    /*2*/["cascabel", "caiman", "tortuga"]
];

echo $animales[2][1];

//en un array asociativo

$animales = [
    "felinos"=>["puma", "pantera", "jaguar"],
    "aves"=>["pato", "colibri", "tucan"],
    "reptiles"=>["cascabel", "caiman", "tortuga"]
];

echo $animales["reptiles"][1];

//como recorrer arreglos multidimensionales

foreach($animales as $clasificacion){
    foreach($clasificacion as $animal){
        echo "animal: $animal";
    }
}

foreach($animales as $key => $clasificacion){
    foreach($clasificacion as $animal){
        echo "$key: $animal";
    }
}

?>

//Funciones
//el nombre de una funcion no puede comenzar con un numero
//debe comenzar con una letraa o un _
//una funcion con nombre nombreUsuario es igual a una NombreUsuario
//no puede tener espacio

<?php

function obtenerEdad(){
    $edad = 2023 - 1991;
    echo "mi edad es: $edad";
}

obtenerEdad();

?>

//Parametros y argumentos
//los datos fuera de la funcion NO pueden usarse dentro de la misma
//para hacer una evaluacion se utiliza el Parametro

<?php

function dameEdad($año){
    $edad = 2023 - $año;
    echo "mi edad es: $edad";
}
//al parametro incial ($año) lo evaluamos con un valor -> obtenerEdad(1991)
//se puede llamar la funcion cuantas veces se necesite
dameEdad(1991);

//se pueden colocar argumento predeterminados

function quieroEdad($año, $añoActual=2023){
    $edad = $añoActual-$año;
    echo "mi edad es: $edad";
}
//valor para año de nacimiento y año actual
quieroEdad(2000, 2010);
//valor para año de nacimiento y año actual, como no pasamos el argumento de año actual toma el predeterminado en el parametro
quieroEdad(2015);

//Return-> se usa para poder acceder a un dato que existe dentro de una funcion

function necesitoEdad($año, $añoActual=2023){
    $edad = $añoActual-$año;
    echo "mi edad es: $edad";
}

//echo $edad;
//no se podria trabajar con la variable $edad porque esta solo existe dentro de la funcion
//para obtener un dato dentro de la funcion se debe utilizar return
necesitoEdad(1990);

function wantEdad($año, $añoActual=2023){
    $edad = $añoActual-$año;
    return $edad;
}

$edad = wantEdad(1991);
echo "mi edad es : $edad";

//declaracion de tipo escalar
//especificar el tipo de dato que recibimos dentro de una funcion
//para evitar que al evaluar la funcion se pasen argumentos que no concuerden con el codigo de la funcion
//en una funcion donde se pide una operacion aritmetica, si los argumentos son strings, no se puede evaluar la funcion
//para recibir el tipo de valor adecuado se antecede a la funcion con declare
//declare(strict_types=1);

// function wantEdad(int $año,int $añoActual = 2023)
// {
//     $edad = $añoActual - $año;
//     return $edad;
// }

?>

//funciones anonimas-closures

<?php

$suma = function () {
    return 11 + 7;
};

echo "la suma es ",$suma();

//si se reciben parametros

$suma = function ($numero1, $numero2) {
    return $numero1+$numero2;
};

echo "la suma es ",$suma(100,400);

//permite usa variables externas

$msj = "la suma es: ";

$suma = function ($numero1, $numero2) use ($msj) {
    $resultado = $numero1 + $numero2;
    return "$msj $resultado";
};

echo $suma(39, 61);

?>
//POE ->programacion orientada a eventos
//POE ->programacion funcional
//POE ->programacion estructurada
//POE ->programacion logica
//POO - programacion orientada a objetos

//POO
//se maneja a traves de clases, estas tiene un nombre, tienen atributos $, metodos function, instancias, modificadores de acceso

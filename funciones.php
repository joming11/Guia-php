<?php

//Funciones
//el nombre de una funcion no puede comenzar con un numero
//debe comenzar con una letraa o un _
//una funcion con nombre nombreUsuario es igual a una NombreUsuario
//no puede tener espacio

function obtenerEdad(){
    $edad = 2023 - 1991;
    echo "mi edad es: $edad";
}

obtenerEdad();


//Parametros y argumentos
//los datos fuera de la funcion NO pueden usarse dentro de la misma
//para hacer una evaluacion se utiliza el Parametro

function dameEdad($año){
    $edad = 2023 - $año;
    echo "mi edad es: $edad";
}
//al parametro incial ($año) lo evaluamos con un valor -> dameEdad(1991)
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

/*

ej:
function imprimirNombre($nombre,$apellido){
    echo "Hola ".$nombre. " ".$apellido."<br>";
}

inmprimir nombre("nombre","apellido");
inmprimir nombre("nombre","apellido");

se puede definir uno de los parametros imprimirNombre($nombre,$apellido="")
asi, si el usuario envia el campo de apellido vacio, no marque error
 */

//funcion nativa rand, genera un numero aleatorio entre los numeros definidos

$numeroAleatorio = rand(1,10);

echo $numeroAleatorio;

//funcion nativa para strings, convierte el string a mayuscula

$nombre = "raquel manzanilla";
$nombreMayuscula=strtoupper($nombre);
echo $nombreMayuscula;

//funcion date, para mostrar fechas

$hoy= date("Y - M - D");
echo $hoy;

?>
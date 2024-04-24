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
<!-- -Incrustar php dentro de un documento de html -->

<?php

//recibir informacion del formulario
//confirmar que el campo no venga vacio
if($_POST){

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];

//concatenacion
echo "Hola ".$nombre." ".$apellido;

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
    <form action="index.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        Apellido
        <input type="text" name="txtApellido" id="">
        <br>
        <input type="submit" value="Enviar nombre">
    </form>
</body>
</html>

<?php
///////////variables y constantes/////////
 
// se usa $
// convenciones para nombrar
// comenzar con una letra o _
// nunca con un numero
// no pueden tener espacios
// sensible a mayusculas, name y Name son variables distintas
// se puede reasignar un valor

?>



<?
////////////Constantes////////

// (se puede usar de manera global)
// const escuela = "Simon Bolivar";

// (se usa de manera local)
// define("direccion","calle 13 de enero");

// para imprimir esta constante usamos
// echo direccion la especificacion de la constante
// si intentara redeclarar direccion, tendria un Error
// direccion="av ricaurte"; no se puede

//Conversiones////////

// detectar los tipos de valores de una variable

// $nombre = "raki";
// echo gettype($nombre);
// $edad = "33";
// echo gettype($nombre);

////cambiar los tipos de valores en una variable////////////////
// a pesar de ser un entero y una cadena, php hace el cambio de tipo y realiza la peticion

// $numero = "18";
// $numero2 = 11;

// $suma= $numero + $numero2;

// echo $suma;

// $numero = 20.5;
// $numero2 = 11;

// $suma= $numero + $numero2;

// para definir que tipo de valor se desea recibir, intval significa (entero valido)
// echo intval($suma);
// echo strval($suma);
// echo gettype(intval($suma));
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


//Operadores

<!-- Unarios, Binarios, ternarios -->
<!-- 
Unarios -> operando Operador
             $total   ++ -->

<!-- Binarios -> operando operador operando
            $total     +        $total -->

<!-- Ternario -> operando operador operando operador operando
        $condicion   ?       'true'     :       'false'; -->

//Operadores de comparacion

Tipo de dato boolean -> dato logico que solo puede tener dos valores, true o false

<?php
//operador igual

$raza = "husky";

var_dump($raza == "Akita");

//operador identico, evalua el valor y el tipo de dato

$edad = 18;

//true
var_dump($edad == "18");
//false  
var_dump($edad === 18);

//Operador diferente, evalua si el valor es distinto, en este caso dara false

var_dump($edad != 18);

//Operador diferente <>

var_dump($edad <> 18);

//Operador no identico !==, evalua que no sean identicos, ni en valor ni en tipo

var_dump($edad !== 18);

//operador mayor que >
//operador mayor que >=
//operador mayor que <
//operador mayor que <=
//operador de nave espacial <=>, regresa 3 valores
//-1 cuando el valor es menor 
//0 cuando ambos valores sean iguales 
//1 cuando el valor es mayor

$edad = 15;

var_dump($edad > 18);
?>

// Operadores de asignacion

// por referencia =&

<?php

$a = 10;
$b = $a;
$a = 19;
//la variable b seguira teniendo el primer valor de la variable a, para que esta cambie conforme cambie la variable a, se asigna el valor por referencia

$b =& $a;
$a = 39;
echo $b;

//Operador de asignacion para concatenar .=

$saludo = "holaaa ";
$saludo .= "usuario ";
$saludo .= "bienvenido";

echo $saludo;

//En operadores aritmeticos

$numero = 20;
$numero = $numero + 10;
//en una forma mas rapida
$numero += 10;
$numero -= 10;
$numero *= 3;
$numero /= 2;
$numero **= 4;
// $numero %= 4;

echo $numero;
?>

// Operadores logicos

<?php
//operador and o &&
$edad = 12;
$esMayor = $edad >= 18;
$regalo = "si";
$traeRegalo = $regalo == "si";

//ambas condiciones deben ser verdaderos
var_dump($esMayor and $traeRegalo);
var_dump($esMayor && $traeRegalo);

//operador or o || arroja true si una de las condiciones es true

var_dump($esMayor || $traeRegalo);

//Operador xor, solo debe cumplirse una condicion

var_dump($esMayor xor $traeRegalo);

//operador no, !

var_dump(!$esMayor);

?>

//Operadores de Incremento Y Decremento

<?php

//Operador pre-incremento
//para sumar 1
//forma basica larga
$numero = 10;
$numero = $numero + 1;
//operador de asignacion
$numero += 1;
//pre-incremento
echo  ++$numero;
//post-incremento, muestra el valor y luego suma
echo $numero++;
//idealmente se usa
$numero++;
echo $numero;

//Operador de pre-decremento
--$numero;

//Operador de pos-decremento
$numero--;
?>

//Operador ternario->operando?opeando:operando
<?php

$promedio = 5;

$aprobo = ($promedio >= 7) ? "Aprobaste" : "reprobaste";

echo $aprobo;

//Operador elvis ?:

$promedio = 7;

//verifica que en promedio haya un valor, si no es asi, asgina el 5
//es importante que la variable tenga un valor incluso si es null, si la variable solo esta declarada,  dara error evaluarla con elvis
$aprobo = ($promedio) ?: 5;

echo $aprobo;

//Operador fusion null ?? observa si la variable no tiene valor declarado y asigna uno

$aprobo = ($promedio) ?? 5;

?>

//Predecedencia de Operadores
//Jerarquia de operaciones
1-()
2-*
3-/
4-+
ver jerarquia de operadores en php

<?php
$edad = 20;
$tieneCedula = "no";

//se evalua la asignacion y arroja true porque por jerarquia se evalua la asignacion y no el and, porque and tiene menor precedencia
$puedeVotar = $edad >=18 and $tieneCedula == "si";

//&& que es igual a and, tiene mayor precedencia, lo que significa que se evalua primero y regresa false
$puedeVotar = $edad >=18 && $tieneCedula == "si";

var_dump($puedeVotar);

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

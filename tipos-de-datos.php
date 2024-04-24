<?php
//////////Tipos de datos///////////

// String = "letras" se pueden escribir entre comillas simples o dobles
// concatenacion "Hola ".$mundo; se usa un punto para unir y comillas vacias para los espacios

//Formas de trabajar un String

// 1era - comillas simples

// 2da - comillas dobles

// 3era - heredoc

// 4ta - nowdoc

//comillas dobles y comillas sencillas

// $saludo = "hola";

// echo "$saludo Miguel Bienvenido";

// con comillas simples 
// echo '$saludo Miguel Bienvenido';

// con comillas simples no se reconoce la variable no se puede hacer la interpolacion, al tener solo una comilla se quita el tiempo que se toma el interprete de definir el string

// para hacer enfasis de una frase no se puede simplemente agregar comillas dobles, reconoce las dos primeras comillas dobles y el segundo par de comillas dobles, fuera de eso, no reconoce las otras palabras como parte del string

// echo ""eres una mala persona" dijo la otra persona";

// para hacer enfasis de una frase dentro de una cadena se usa \, la barra de escape

echo "\"eres una mala persona\" dijo la otra persona"."<br>";

// se pueden usar comillas dobles dentro de comillas simples sin problema

echo '"eres una buena persona"'.'<br>';

// para usar comillas simples dentro de comillas simples se debe usar la barra de escape \

echo 'I\'dont'.'<br>';

// usar comillas simples dentro de comillas dobles las comillas simples se reconocen como parte de la cadena

echo "'Eres una gran persona'"."<br>";

//usar dentro de las comillas dobles el simbolo $

echo "\20020000$"."<br>";

//dentro de comillas simples, no hay problema el uso de $ porque no reconoce el simbolo como variable

echo '30$'.'<br>';

//heredoc y nowdoc - permite crear strings con muchos caracteres

//Heredoc

// <<<identificador+enter

//permite que se incluyan variables

//se pueden incluir comillas
echo <<<frase
No importa cual bando inicia una guerra, cuando esta comienza, ambos bandos son malos.<br>
frase;

//Nowdoc

// <<<'identificador'+enter

//no incluye variables

echo <<<'frase'
Ella era como el sol, todo giraba alrededor de ella, incluso yo, todo resplandecia, todo brillaba por ella, y yo era feliz, por ella.<br>
frase;

//ambas se pueden guardar en variables
//$frase = <<<id+enter+string+id;

// Funciones para los strings//

//Extraer una parte de un string
//desde el caracter 5 en adelante
$apellido = substr("José Navas Gutierrez", 5);

echo $apellido."<br>";

//si solo deseo cierto numero de caracteres
//desde el caracter 5, 11 carateres mas
$apellidos = substr("José Navas Gutierrez", 5, 11);

echo $apellidos."<br>";

//se pueden usar numeros negativos en la longitud
//recorre el string hacia atras
$apellido2 = substr("Gutierrezzz", 0, -8);

echo $apellido2."<br>";

//buscar una palabra dentro de un string

//strpos(donde se va a buscar, cual palabra se va a buscar)

//lo que devuelve strpos es la posicion de la palabra en el string

$bienvenida = "bienvenido al mundo de la programacion";

$palabra = "programacion";

$buscar = strpos($bienvenida, $palabra);

echo $buscar."<br>";

//se pueden mezclar las funciones
//strpos para definir la posicion de la palabra en el string y substr para extraer la palabra

$bienvenida = "bienvenido al mundo de la programacion";

$palabra = "programacion";

$buscar = strpos($bienvenida, $palabra);

$extraccion = substr($bienvenida, $buscar);

echo $extraccion."<br>";

//Replace - reemplazar una palabra o caracter dentro de un string
//definir cual variable se va a modificar
//que parte de la variable se va a modificar
//y por cual elemento se va a sustituir

$rfc = "91 75 1A EC C7";
$replace = " ";
$remplazar = ":";

$resultado = str_replace($replace, $remplazar, $rfc);

echo $resultado."<br>";

//Agregar formato a un string

$año = "1991";
$mes = "7";
$dia = "11";

$formato = "%s-%s-%s";
$formato = "%s/%s/%s";

echo sprintf($formato, $dia, $mes, $año)."<br>";

// entero = 7;
// float = 11,4;
// booleano = true;

// $nombre = "miguel";
// $edad = "8";
// $promedio = "20";
// concatenacion
// echo $nombre, " ", $edad, " ", $promedio;
?>

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
    <form action="tipos-de-datos.php" method="post">
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

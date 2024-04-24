<?php
///////////variables y constantes/////////
 
// se usa $
// convenciones para nombrar
// comenzar con una letra o _
// nunca con un numero
// no pueden tener espacios
// sensible a mayusculas, name y Name son variables distintas
// se puede reasignar un valor


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
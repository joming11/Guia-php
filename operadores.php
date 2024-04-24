<?php
//Operadores

Unarios, Binarios, ternarios

Unarios 
operando Operador
             $total   ++

Binarios 
operando operador operando
            $total     +        $total

Ternario 
operando operador operando operador operando
        $condicion   ?       'true'     :       'false';

//Operadores de comparacion

// Tipo de dato boolean dato logico que solo puede tener dos valores, true o false

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


// Operadores de asignacion

// por referencia =&

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

// Operadores logicos

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

//Operadores de Incremento Y Decremento

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

//Operador ternario->operando?opeando:operando

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


//Predecedencia de Operadores
//Jerarquia de operaciones
1-()
2-*
3-/
4-+
ver jerarquia de operadores en php

$edad = 20;
$tieneCedula = "no";

//se evalua la asignacion y arroja true porque por jerarquia se evalua la asignacion y no el and, porque and tiene menor precedencia
$puedeVotar = $edad >=18 and $tieneCedula == "si";

//&& que es igual a and, tiene mayor precedencia, lo que significa que se evalua primero y regresa false
$puedeVotar = $edad >=18 && $tieneCedula == "si";

var_dump($puedeVotar);

?>
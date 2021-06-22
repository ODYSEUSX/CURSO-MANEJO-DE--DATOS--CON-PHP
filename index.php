<?php

$greet = function ($name) // variable que requiere lógica
{
   return "Hola, $name";
};
echo $greet('ITALO');

// funciones anonimas con closure(valida que las variables van a recibir funciones anonimas)

function greet(closure $lang,$name)
{
    return $lang($name);
}

$es= function ($name)
{
    return "Hola , $name";
};



$en= function ($name)
{
    return "Hello , $name";
};
 echo greet($es,'Lynda');

 //otro ejemplo de funciones anonimas

 function conversionDePesosCopA(Closure $moneda,$valor){
    return $moneda($valor);
}

$dolar=function($valor){
    $resultado= $valor/3711.60;
    return $resultado." USD <br>";
};

$euro=function($valor){
    $resultado=$valor/4507.71;
    return "$resultado EUR <br>";
};

$yen=function($valor){
    $resultado=$valor/33.9403;
    return "$resultado JPY <br>";
};

echo conversionDePesosCopA($dolar,1280000);
echo conversionDePesosCopA($euro,1280000);
echo conversionDePesosCopA($yen,1280000);

<?php

$courses=['php','javascript','laravel' ];
sort($courses); //ordena de manera descendente(mayor a menor del numero de caracteres)
//rsort($courses)  ordena de manera ascendente(menor a mayor).
echo "<pre>";
var_dump($courses);
//

$courses=[
10=>'php',
100=>'javascript',
1000=>'laravel' 
];

ksort($courses);//ordena las llaves de menor a mayor
//krsort($courses);// ordena de forma inversa(mayor a menor)
echo "<pre>";
//var_dump($courses);

var_dump(array_slice($courses,1));//corta el primer elemento y te muestra lo restante

//array chunk
$courses=['php','javascript','laravel' ];
echo "<pre>";
var_dump(array_chunk($courses,2));//array_chunk: Divide un array en fragmentos(otros arrays).
// array_shift($courses)
$courses=['php','javascript','laravel' ];
echo "<pre>";
var_dump(array_shift($courses));// elimina el primer elemento del array original y muestra el elemento eleiminado en pantalla.
var_dump($courses);

//array_pop($courses)
$courses=['php','javascript','laravel' ];
echo "<pre>";
var_dump(array_pop($courses));//elimina el utimo elelemento del array original y lo muestra en pantalla

//array_unshift()
$courses=['php','javascript','laravel' ];
echo "<pre>";
var_dump(array_unshift($courses,'emacscript')); //aumenta uno o mas elelemtos al inicio array original
var_dump($courses);

//array_push
$courses=['php','javascript','laravel' ];
echo "<pre>";
var_dump(array_push($courses,'python'));// aumenta uno o mas elelmentos al final del array original
var_dump($courses);

//array_flip
$courses=[
'php'=> 'backend',
'javascript'=> 'frontend',
'laravel' => 'framework'
];
echo "<pre>";
var_dump(array_flip($courses));//intercambia el valor de la key por el value de todo el contenido del array



<?php

//alterar

$text= "PHP es UN LENGUAJE";

echo $text;

//modificando.
$text= "PHP es UN LENGUAJE";

//echo strtolower($text);

echo strtoupper($text);
echo ucfirst($text); // primera letra en mayúscula
echo lcfirst($text);//primera letra en minúscula

// REEMPLAZAR
$text= "PHP es UN LENGUAJE"; //slug

$slug =str_replace(' ','-',$text);
echo $slug;
echo strtolower($slug);

//modificación

$code =39;
echo str_pad($code,8,'#');// remplaza por '#' los espacios(8) que faltan .

$code =39;
echo str_pad($code,8,'#', STR_PAD_BOTH); //QUEDAR EN EL MEDIO.

//CON HTML
$text= "<h1>PHP es UN LENGUAJE</h1>";
echo $text;

echo strip_tags($text);  //elimina etiquetas html 

//tildes
$text= "PHP es UN LENGUAJE , año 2020 , programación";
echo strtoupper($text); //monobyte
echo mb_strtoupper($text); //multibyte
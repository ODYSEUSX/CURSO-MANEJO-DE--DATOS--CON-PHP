<?php

$password = '12345';
echo preg_match('/^[0-9]{6,9}$/', $password); //{6,9} es la condición=> la contraseña puede tener un minimo de 6 caracteres y un máximo de de 9.
                                              //[0-9] indica dominio que va tener tu variable password , solo puedes meter numeros del 0 al 9 <div class=""></div> 
//cambiamos la muestra de la respuesta con "var_dump"

//preg_match  es la funcion de verificacion si esta bien ingresada la contraseña.

$password = '1234567890';
var_dump((bool) preg_match('/^[0-9]{6,9}$/', $password));
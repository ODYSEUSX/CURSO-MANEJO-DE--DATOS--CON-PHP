<?php

echo "Un texto de una linea <br>
varias lineas <br>";
$name = "italo";

echo "Mi nombre es $name <br>";

$courses=[

 "backend" =>[
      "PHP",
      "Laravel"
 ]

 ];

 echo "{$courses['backend'][0]} <br>";

 class User
 {
     public $name="italo";
 }

 $user =new User;

 echo "$user->name quiere aprender {$courses["backend"][0]} <br>" ;
 


 $teacher='italo';
 $italo='Profesor de Php';

 echo "$teacher es ${$teacher} <br>";

 function getTeacher()
 {
     return 'teacher';
 }

 $teacher= "italo";

 echo "${getTeacher()} enseña PHP <br>";

 echo 'Podemos escapar una comilla
simple así \' con un backslash \\ continuar con más texto <br>';
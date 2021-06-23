<?php

$courses=['javascript','laravel','php', 'vuejs'];

echo "<pre>"; //"<pre>" nos hace mostyrar de manera mas clara el array que queremos mostrar.
 var_dump($courses);

 //cambiando el numero de item de un array
 $courses=['javascript', 10=>'laravel','php', 'vuejs'];

 echo "<pre>"; //"<pre>" nos hace mostyrar de manera mas clara el array que queremos mostrar.
  var_dump($courses);

  // array complejo

  $courses= [
      'frontend'=> 'javascript',
      'framework'=> 'laravel',
      'backend'=> 'php'
  ];
  /*echo "<pre>";*/
 /* var_dump($courses);*/
  foreach ($courses as $key =>$value){  //tabien se puede poner asi: foreach ($courses as $course)    // $course en singular significa el elemento individual que esta en el array $courses

      echo "$key: $value <br>";
  };

  //CON la funcion array_walk
  $courses= [
    'frontend'=> 'javascript',
    'framework'=> 'laravel',
    'backend'=> 'php'
];

/*function upper($course)
{
    echo strtoupper($course)." <br>";
}*/

function upper($course,$key)
{
    echo strtoupper($course).": $key <br>";
}


array_walk($courses,'upper');

//otras funciones que son importantes
/*array_key_exists('frontend', $courses); //te saldra en la pantalla "true " ya que la función busca en tu array si existe ese value.
/*in_array('javascript','$courses'); // esta función hace la busqueda de valores(values)
/array_keys($courses) // imprime los keys en pantalla.
/array_values($courses)//imprime todos los valores de tu array.
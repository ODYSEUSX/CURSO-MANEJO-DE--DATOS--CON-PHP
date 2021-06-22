<?php
 //valores
function greet($name)
{
    return "Hola, $name";
}

echo greet('italo');

//referencias
$course='PHP';
function path(&$course)  // el caracter "&" hace que el cambio afecte a lo que esta dentro de la función path y tambien a lo que esta afuera de dicha función y lo hace por referencia.
{
    $course= 'Laravel';
    echo $course;//Laravel
}
path($course);
echo $course; //Laravel

//predeterminado

function greet($name='italo')
{
    return "hola,$name  ";
}

echo greet();
echo greet('abel');
//RETURN

function greet()
{
   echo  "Hola..."; //AUNQUE COMPILA ESTA ES UNA MALA PRACTICA
}

echo 
greet();
 //LA MANERA CORRECTA DE HACERLO.

 function greet()
{
    return "HOLA...";
}
    
   echo greet();

//para retornar varios elementos siempre debemos usar un array
function greet()
{
    return ['pdf','vista'];
}
    
   var_dump(greet()) ;  //utilizamos var_dump en vez de echo para mostrar los resultados.

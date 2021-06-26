<?php

$courses=['php','javascript' ];
$wishes=['php','laravel','javascript','vuejs'];

echo"<pre>";

//var_dump(array_diff($wishes,$courses));

$arrayA=[1,2,3,4,5];
$arrayB=[3,4,5,6,7];

echo"<pre>";

var_dump(array_diff($arrayA,$arrayB));

//ARRAY_DIFF_ASSOC: VALORES, KEYS


$courses = [ 
    'frontend'  => 'javascript',
    'backend'   => 'php'
];

$wishes = [ 
    'backend'       => 'php',
    'frameworks'    => ['laravel', 'vuejs'  ],
    'frontend'      => 'javascript',
    'css'           => 'tailwind'
];

echo '<pre>';
var_dump(array_diff_assoc($wishes, $courses));



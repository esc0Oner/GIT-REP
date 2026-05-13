<?php
$name= "Carlos";
$op=$a*$b;

function saludo($greeting, $name){
	$greeting= "Ey ". $name. " Porque tan serio";
    echo $greeting;
}

echo saludo($greeting, $name);

function product($a,$b,$op){
    $a=25;
    $b=5;

    echo $op;
   
}

product($a,$b,$op);

?>
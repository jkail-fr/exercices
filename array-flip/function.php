<?php

/*
Cette fonction doit prendre echanger les cl�s et les valeurs d'un array . Pour commencer les cl�s seront simplement num�riques)

*/

function flip_it($array)
{
    $extract=$array[0];
    unset($array[0]);
    array_push($array,$extract);

}

$arraytest=array('tata','titi','toto');
flip_it($arraytest);
var_dump ($arraytest); /* si 'tata' passe � la fin, c'est tout bon*/

?>
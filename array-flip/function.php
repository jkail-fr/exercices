<?php

/*
Cette fonction doit prendre la premi�re valeur d'un array et la positionnera en derni�re position de l'array

1 : lire l'array
2 : extraire la premiere valeur
3 : l'ajouter � la fin

4 : evolution : choisir a valeur a mettre � al fin ...ca prendrai par exemple en param ($monarray,3) pour la 3eme valeur de l'array "monarray"

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
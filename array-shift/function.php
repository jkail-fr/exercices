<?php
/*
Cette fonction doit sorir la première entrée d'un array et la stocker dans une nouvelle variable
 */

function myarray_shift(&$array)
{
    $i=0;
    $resultat = false;
    {
        foreach($array as $key => $value)
        {
            if ($i<1)
            {
            $resultat=$value;
            unset($array[$key]);
            $i++;
            }
        }

    }
    return $resultat;
}

$arraytest=array('tata','titi','toto'); /* bon si j'ai pas fait n'importe quoi c'est supposé tata dans une autre variable et l'array commence avec titi*/
$tt= myarray_shift($arraytest);
var_dump ($arraytest,$tt);

?>



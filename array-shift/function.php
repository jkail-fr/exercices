<?php
/*
Cette fonction doit sorir la première entrée d'un array et la stocker dans une nouvelle variable
 */

function array_shift($array)
{
    $i=0;
    while($i<2)
    {
        foreach($array as $entrees)
        {
            $resultat=$entrees;
            unset($array[$i]);
            $i++;
        }
    }
    return $resultat;
}

$arraytest=array('tata','titi','toto'); /* bon si j'ai pas fait n'importe quoi c'est supposé tata dans une autre variable et l'array commence avec titi*/
array_shift($arraytest);
echo $resultat;

?>



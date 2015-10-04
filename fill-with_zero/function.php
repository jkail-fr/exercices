<?php
/*
1- On va creer un fonction qui va ajouter des zeros devant une chaine
soit $lenght la taille de la chaine et $chaine la chaine à compléter.
Ainsi pour $lenght=4 et $chaine=25 on la fonction devra renvoyer 0025

2- si la chaine est plus longue que lenght ou n'est pas une serie de chiffre -> ca renvoie false
3- systeme :
on calcule la tailel de la chaine.
On soustrait cette valeur à la taille lenght
On ajoute autant de zero que le resultat de la soustraction le demande devant la chaine (s'il faut, on l'inverse et on rajoute le tout apres avant de réinverser

Il sera probableme necessaire de mettre la chaine dans un array (explode/implode)


Version 2 : on rajoute des zero devant $chaine et on recupere le nombre de caractere de taille $lenght

Alright guys let's do this !
-Leroy Jenkins

*/


function fillWithZero ($string,$lenght)
{
    if (isset($string) AND isset($lenght) /*AND gettype($lenght)=="integer" AND gettype($string)=="string"*/) // on vérifie que les variables existent et on verifie que $lenght est bien numerique et que $string est bien une string ,ca aide
    {
        $size = strlen($string);
        if ($size >= $lenght)
        {
            return($string);
        }
        else
        {
            $size=$lenght-$size;
		    $i="0";
		    $add="0";
            while ($i<$size)
            {
                $add="0".$add;
                $i++;
            }
            $result=$add.$string;
		}
        return($result);
    }
    else
    {
        echo 'Il manque une variable';
    }


}
echo fillWithZero(12,4); // C'est supposé renvoyé 0012

?>
<?php
/**
 * Created by PhpStorm.
 * Date: 22/09/2015
 * Time: 23:05
 */
//objectif : recréer la fonction strrchr
/*
1 definir le type de la chaine. Si ca n'est pas du texte alors la fonction renvoi "false"
2 lire la chaine et on la compare avec un caractere
3 pour chaque caractère qiui ne correspond pas, on incrément une variable de 1. Dès qu'on trouve ce caractere, on stocke la valeur dans une autre variable et on incremente la première.
4 si on ne trouve pas l'élément recherché, alors on renvoi soit "0" soit false



Idée hgbiale, on va utiliser strstr, strrev et strlen pour trouver tout ca, comme ca pas d'imploe ou d'explode  !!

*/

function strrchr2 ($variable,$search)

    //ce code ne marche pas car si la chaine est sur 2 entrées de l'array ca ne fonctionne pas
{
    $type=gettype($variable); //on récupère le type de la variable, si ca n'est pas string, on renvoie FALSE
    if ($type!="string")
    {
        return(FALSE);
    }
    else // Si c'est une string on continue
    {
        //on inverse les variables
        $variable=strev($variable);
        $search=strev($search);
        $maxSize=strlen($variable);
        $size=strlen($search);
        $revSearch=strstr($variable,$search);
        $result=$maxSize-$revSearch+1;
        return($result);
    }

}

echo strrchr2('h','recherche');
?>
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

ici $variable = la chaine de caractère à charcher (le haystack) et $charac la chaine à rechercher (needle)

voir usage de chr, ssxanf, str_split....sinon enchainement de strrev et de strpos
sinon explode pour faire un array et trouver le caractere dans l'array


-> essayer de rempalcer la ligne 41 par une boucle, ca sera plus efficace

*/



function strrchr2 ($variable)

    //ce code ne marche pas car si la chaine est sur 2 entrées de l'array ca ne fonctionne pas
{
    $type=gettype($variable); //on récupère le type de la variable, si ca n'est pas string, on renvoie FALSE
    if ($type!="string")
    {
        return(FALSE);
    }
    else // Si c'est une string on continue
    {
        $taille=strlen($variable); //on récupère la longueur de la chaine à chercher
        if ($taille>0)
        {
            $characArray=str_split($variable, $taille);

            foreach($characArray as $recherche);
            {
                $count=0;
                if ($charac == $recherche)
                {
                    $count++;
                }
                else
                {
                    $result=$count;
                    $count++;
                }
            }
        return($result);
        }
       else
        {
            return(FALSE);
        }
    }

}


//Version avec boucle

function strrchr3 ($variable)

    //ce code ne marche pas car si la chaine est sur 2 entrées de l'array ca ne fonctionne pas
{
    $type=gettype($variable); //on récupère le type de la variable, si ca n'est pas string, on renvoie FALSE
    if ($type!="string")
    {
        return(FALSE);
    }
    else // Si c'est une string on continue
    {
        $taille=strlen($variable); //on récupère la longueur de la chaine à chercher
        $i=0;
        while ($i<=$taille)
        {
            $characArray=str_split($variable, $taille);

            foreach($characArray as $recherche);
            {
                $count=0;
                if ($charac == $recherche)
                {
                    $count++;
                }
                else
                {
                    $result=$count;
                    $count++;
                }
            }
            return($result);
            $i++;
        }
        else
        {
            return(FALSE);
        }
    }
}
?>
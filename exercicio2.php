<?php

function filtre($chaine, $tab)
{
    //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
    foreach ($tab as $key) {
        if ($key == $chaine) {
            echo "True \n";

        } else {
            echo "false \n";
        }
    }
    //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
}


filtre("Cherry", ["Orange", "Cherry", "Guava", "Mangue", "Fraise", "Raspberry"]);

<?php
function contentOfFile($file = '', $offset = 0, $max = 0)
{
    //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
    $file = file_get_contents('./people.txt', true);
    return $file;
    //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
}

contentOfFile('higor.txt');

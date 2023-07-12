<?php

echo 'Pergunta:<br>';
echo '<h2>Rédigez le code de la fonction filtre qui reçoit deux arguments "$chaine" et "$tab". La fonction retourne :
- true si la chaine de caractère $chaine est l"une des valeurs du tableau "$tab". Attention, la casse est importante.
false dans tous les autres cas</h2> <br>';

echo 'function filtre("$chaine", "$tab")
{


}<br>';

echo 'Cherry, ["Orange", "Cherry", "Guava", "Mangue", "Fraise", "Raspberry"])<br>';

echo '<br><br>';


echo 'Resposta:<br>';
function filtre($chaine, $tab)
{
    //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
    foreach ($tab as $key) {
        if ($key == $chaine) {
            echo "True <br>";

        } else {
            echo "false <br>";
        }
    }
    //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
}


filtre("Cherry", ["Orange", "Cherry", "Guava", "Mangue", "Fraise", "Raspberry"]);

<?php

echo 'Pergunta:<br>';
echo '<h2>Complétez le code de la fonction counterWord prenant en paramètre une chaîne de caractères $sentence et une autre chaine de caractères $word. La fonction
devra retourner le nombre doccurence du mot $word contenu dans la phrase $sentence.
</h2> <br>';

echo
'function counterWord($sentence = "", $word = "")<br> {
    <br>

    }<br><br>
    counterWord("Ceci est un test", "est");<br>';


echo '<br>Resposta:<br>';
function counterWord($sentence = "", $word = "")
{

    $array = explode(" ", $sentence);
    // print($n_palavras);
    foreach ($array as $key) {
        echo substr_count($key, $word);
        if($key == $word){
            return;
        }
    }

}

// echo $count;
counterWord("Ceci est un test", "est"); // return 1

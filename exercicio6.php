<?php

echo 'Pergunta:<br>';
echo '<h2>Rédigez le code de la fonction isObjectOrArray qui reçoit en argument $variable. La fonction devra retourner :<br>
- true si $variable est un objet ou un tableau.<br>
- false dans tous les autres cas.</h2> <br>';

echo 'function isObjectOrArray($variable)<br>
{
<br>
$result = array_search($variable, $mavariable);
return $result;
<br>
}
<br>';

echo '<br>class Foo{}<br>
$foo = new Foo();<br>
$mavariable = array(1,54,48484,51);<br>';

echo '<br><br>';


echo 'Resposta:<br>';
function isObjectOrArray($mavariable)
{
//----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
    if (is_array($mavariable) || is_object($mavariable)) {
        echo 'true';
    } else {
        echo 'false';
    }
//----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
}

class Foo{}
$foo = new Foo();
$mavariable = array(1,54,48484,51);



isObjectOrArray($foo);
isObjectOrArray($mavariable);


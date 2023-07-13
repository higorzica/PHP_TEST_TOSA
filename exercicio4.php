<?php

echo 'Pergunta:<br>';
echo '<h2>Compléter le code suivant afin de lancer une exception.</h2> <br>';

echo
'try <br>{
    $a = 1;
    $b = 0;
    $resultat = divide($a, $b);<br>

    }catch (Exception $e) <br>{
        echo Caught exception: , $e->getMessage(), _________ ;<br>
    }<br>';


echo '<br>Resposta:<br>';

function divide($a, $b)
{
    //---------- FUNÇÃO PASSA PELA DIVISÃO POR ZERO CAI NO EXCEPTION ----------
    if ($b == 0) {
        throw new Exception('Não é possível realizar uma divisão por zero');
    }
    //---------- SE NÃO FOR DIVISÃO POR ZERO FAZ O METODO ABAIXO ----------
    $resultado = $a / $b;
    return $resultado;
}


try {
    //---------- FUNÇÃO PASSA PELA DIVISÃO POR ZERO CAI NO EXCEPTION ----------
    $a = 1;
    $b = 0;
    $resultado = divide($a, $b);
    echo $resultado;
    //----------EXIBE MENSAGEM DE ERRO----------
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "<BR>";
}

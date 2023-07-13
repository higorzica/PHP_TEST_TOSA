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

// função que exibe até no maximo 100 registros
function array_get(int $max): array
{
    if ($max > 100) {
        die("Maximo de elementos são 100 por tabela.");
    }

    $arr = [];

    for ($i=1; $i <= $max ; $i++) {
        array_push($arr, $i);
    }

    return $arr;

}
// função que imprime na tela o array retornado por item
function array_print(array $arr): void
{
    foreach ($arr as $n) {
        echo $n.' ';
        echo '<br>';
    }

}

// função que pega valores dentro da matriz
function array_keep_values(array $arr, int $length): array
{
    if($length < 0) {
        die("Incorreto");
    }
    
    return array_slice($arr, 0, $length);

}

// função que pega valores dentro da matriz
function FV_array_reverse(array $arr): array
{
    $reverse_array = [];
    for($i = count($arr) - 1 ; $i >= 0 ; --$i) {
        array_push($reverse_array, $arr[$i]);
    }
    
    return $reverse_array;
}

$resultado = array_get(20);
array_print($resultado);

$resultado = array_keep_values($resultado, 5);
$resultado = FV_array_reverse($resultado, 5);
array_print($resultado);

<?php

echo 'Pergunta:<br>';
echo '<h2>Rédigez le code de la classe Single en ajoutant une méthode public et statique getInstance Vous devez implémenter le design pattern Singleton. La méthode
getInstance devra donc toujours retourner la même instance de la classe Single</h2> <br>';

echo
'class Single <br> {
private static $_instance = null ;<br>
private function __construct() {
}<br>
public static function getInstance() {
    <br>
}<br>

}<br>';


echo 'Resposta:<br>';
class Single
{
    //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
    private static $_instance = null;
    private function __construct()
    {

    }
    public static function getInstance()
    {

        if(is_null(self::$_instance)) {
            self::$_instance = new Single();
        }
        return self::$_instance;
    }
    //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
}

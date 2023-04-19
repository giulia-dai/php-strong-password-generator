<?php
if (isset($_GET['characterNumber'])) {
    // creo una variabile con la lunghezza della password richiesta
    $passwordLength = $_GET['characterNumber'];
}


// funzione che genera una password random
function getMyPassword($n)
{
    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789?![]()@*#';
    $characterslength = strlen($comb);
    $password = array();

    // faccio un ciclo dove n è il numero di caratteri scelto dall'utente
    // genero numero random che va da 0 al numero massimo di caratteri  
    // inserisco caratteri nell array 
    for ($i = 0; $i < $n; $i++) {
        $randomNumber = rand(0, $characterslength - 1);
        $password[] = $comb[$randomNumber];
    }
    // trasformo l'array password in una stringa con implode
    return implode($password);
};

if (isset($passwordLength)) {
    $finalPassword = getMyPassword($passwordLength);
}

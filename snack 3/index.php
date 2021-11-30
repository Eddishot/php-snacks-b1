<?php
/*
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/



$numList = [];
$numTotali = 15;

while(count($numList) < $numtotali){
    $numRandom = rand(1, 100);

// controllo se dentro l´array dei numeri ci sono i numeri random, se no li aggiungo dentro l´array
    if(!in_array($numRandom, $numList)){

        $numList[] = $numRandom;
    }
}
?>
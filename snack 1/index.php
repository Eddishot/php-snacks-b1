<?php
/*
Snack 1
Passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri
, che mail contenga un punto e una chiocciola e che age sia un numero.
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

$nameGet = $_GET["name"];
$emailGet = $_GET["email"];
$ageGet = $_GET["age"];

$hasDot = strchr($emailGet, ".");
$hasAt = strchr($emailGet, "@");
$hasNUmber = is_numeric($ageGet);



if((strlen($nameGet) > 3) && $hasDot && $hasAt && $hasNUmber ){
    echo "accesso riuscito";
} else{
    echo "accesso rifiutato";
}

// if($hasDot && $hasAt){
//     echo "OOKK";
// }else{
//  echo"NOT OOK";
// }

?>


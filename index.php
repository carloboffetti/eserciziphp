<?php

/* $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$counter = 0;
$total = 0;

foreach($numbers as $number){
    if($number % 2 == 0){
        $total += $number;
        $counter ++;
    }
}

echo $total; */

// ESERCIZIO DI CHECK PASSWORD
// DEVE CONTENERE ALMENO 8 CARATTERI;
// DEVE CONTENERE UNA LETTERA MAIUSCOLA;
// DEVE CONTENERE UN CARATTERE NUMERICO;
// DEVE CONTENERE ALMENO UN CARATTERE SPECIALE;

/* $pwd = readline("Inserisci la tua password:\n");
 */
$checkLenght = false;
$checkUpperCase = false;
$checkNum = false;
$checkSpecial = false;

// DEVE CONTENERE ALMENO 8 CARATTERI;
// prima senza funzione
function checkLenght($string){
    if (strlen($string)>= 8) {
       return true;
    }
    return false;
}


// DEVE CONTENERE UNA LETTERA MAIUSCOLA;
// prima senza funzione, utilizziamo break
function checkUpper($string){
    for ($i=0; $i <strlen($string) ; $i++) { 
        if (ctype_upper($string[$i])) {
            return true;
        }
    }
    return false;
}


// DEVE CONTENERE UN CARATTERE NUMERICO;
// utilizziamo lo stesso di su
function checkNumber($string){
    for ($i=0; $i <strlen($string) ; $i++) { 
        if (is_numeric($string[$i])) {
          return true;
        }
    }
    return false;
}


// DEVE CONTENERE UN CARATTERE SPECIALE
// utilizziamo lo stesso di su
function checkSpecial($string){
    $special_chars = ["!", "@", "#", "$"];
    for ($i=0; $i < strlen($string) ; $i++) { 
        if (in_array($string[$i], $special_chars)) {
          return true;
        }
    }
    return false;
}


//CHECK FINALE
function checkPassword($string){
    $checkLenght = checkLenght($string);
    $checkUpper= checkUpper($string);
    $checkSpecial = checkSpecial($string);
    $checkNum = checkNumber($string);

    return $checkLenght && $checkNum && $checkSpecial && $checkUpper;
};
/* var_dump(checkPassword($pwd));
 */
// togliamo sempre il readline su
do {
    $password = readline("Inserisci una password: ");

    if(!checkLenght($password)){
        echo "la pass è troppo corta \n";

    };

    if(!checkNumber($password)){
        echo "la pass deve contenere almeno un numero \n";

    };

    if(!checkSpecial($password)){
        echo "la pass deve contenere almeno un carattere speciale\n";

    };

    if(!checkUpper($password)){
        echo "la pass deve contenere almeno una lettera maiuscola \n";

    };
} while (!checkPassword($password));

?>
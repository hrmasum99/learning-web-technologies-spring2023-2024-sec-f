<?php

//     function ipputlen($x){
//     if (!ctype_alpha(substr($password, 0, 1))) {
//         //echo "first character is a letter";
//         return false;
//     }
//     return true;
// }

    function hasDigit($x){
    $containsDigit = false;
    for ($i = 0; $i < strlen($x); $i++) {
        if (ctype_digit($x[$i])) {
            $containsDigit = true;
            break;
        }
    }
    if (!$containsDigit) {
        //echo "password contains at least one digit";
        return false;
    }
    return true;
}

function hasSpecialChar($x){
    $containsSpecialChar = false;
    for ($i = 0; $i < strlen($x); $i++) {
        if (!ctype_alnum($x[$i])) {
            $containsSpecialChar = true;
            break;
        }
    }
    if (!$containsSpecialChar) {
        //echo "password contains at least one special character";
        return false;
    }
    return true;
}

function isValidNameWord($x) {
    $containsNameWord = false;
    $allowedChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-';
    for ($i = 0; $i < strlen($word); $i++) {
        if (strpos($allowedChars, $word[$i]) === false) {
            $containsNameWord = true;
            break;
        }
    }
    if (!$containsNameWord) {
        return false;
    }
    return true;
}
?>

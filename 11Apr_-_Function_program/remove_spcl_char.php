<?php

/**
 * Summary of remove_specialChars
 * @param mixed $string
 * @return void
 * outputs string only with Characters and if special character in original string exceeds count 20,
 * new word "WORLD" is added at the end of string
 */
function remove_specialChars($string)
{
    // split the string into characters
    $s = str_split($string, 1);
    // this will only contains alphabets
    $new_string = array();
    //count of special characters
    $special_char = 0;

    // separate special characters and alphabets
    for ($i = 0; $i < count($s); $i++) {
        if (preg_match("/[A-Za-z]/", $s[$i])) {
            array_push($new_string, $s[$i]); 
        } else {
            $special_char++;
        }
    }

    // check if special characters are more than count 20
    if ($special_char > 20) {
        array_push($new_string, "WORLD");
    }

    echo (implode("", $new_string) . "<br>");
}

remove_specialChars("Kabca!!!i !!!!!!!!!!!!!! sadhisad !!!");
remove_specialChars("sadsa dsfAS7sd(^(^(A(&D*&(A(SDA&S(D&9*A&SDsaddfdsf");
?>
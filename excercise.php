//? Excercise 2 (Reverse String)


<?php

function reverseString(string $text): string
{
    $reverse = strrev($text);
    return $reverse;
}

reverseString("cool");

?>
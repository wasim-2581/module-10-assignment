<?php

function vowelCount($string) {
    $count = 0;
    $string = strtolower($string);
    for($i = 0; $i < strlen($string); $i++) {
        if($string[$i] == 'a' || $string[$i] == 'e' || $string[$i] == 'i' || $string[$i] == 'o' || $string[$i] == 'u') {
            $count++;
        }
    }
    return $count;
}

function reverseString($string) {
    $string = strrev($string);
    return $string;
}
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vCount = vowelCount($string);
    $rString = reverseString($string);
    echo "Original String: ".$string.", Vowel Count: ".$vCount.", Reversed String: ".$rString."\n";
}
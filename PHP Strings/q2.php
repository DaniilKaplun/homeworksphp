<?php
$string = " mary jones lives in santa cruz, california at 22 ocean drive. ";

echo $string. "<br><br>";

// a) number of 
echo "a) Length: " . strlen($string) . "<br><br>";

// b) 
echo "b) Uppercase: " . strtoupper($string) . "<br><br>";

// c)
echo "c) Lowercase: " . strtolower($string) . "<br><br>";

// d) 
echo "d) Capitalized: " . ucwords($string) . "<br><br>";

// e) 
$address = substr($string, strpos($string, "22"));
echo "e) Address: " . $address . "<br><br>";

// f) 
echo "f) Trimmed: '" . trim($string) . "'<br><br>";

// g) 
echo "g) Position of California: " . strpos(strtolower($string), "california") . "<br><br>";

// h)
echo "h) Replaced: " . str_ireplace("santa cruz", "Los Altos", $string) . "<br><br>";

// i) 
echo "i) Word count: " . str_word_count($string);
?>
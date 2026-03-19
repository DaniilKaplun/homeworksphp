<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Question 1</title>
</head>
<body>

<h2>Question 1: Names Array</h2>

<?php
$namesString = "John, Jerry, An, Sanji, Wen, Paul, Luise, Petter";

// a. 
$names = explode(", ", $namesString);
echo " a. Oreginal aray:  <br>";
print_r($names);
echo "<br><br>";

// b. 
sort($names);
echo " b. Sorted array:  <br>";
print_r($names);
echo "<br><br>";

// c. 
$reversed = array_reverse($names);
echo " c. Reversed array  <br>";
print_r($reversed);
echo "<br><br>";

// d.  
array_shift($names);
echo " d.    removing first element:  <br>";
print_r($names);
echo "<br><br>";

//e  
array_push($names, "Willie", "Daniel");
echo " e.    adding Wilie and Daniel:  <br>";
print_r($names);
echo "<br><br>";

// f  
$key = array_search("Paul", $names);
if ($key !== false) {
    $names[$key] = "Andre";
}
echo " f.    replacing Paul with Andre  <br>";
print_r($names);
echo "<br><br>";

//        g 
array_unshift($names, "Alisha");
echo " g.    adding Alisha to the beginning:  <br>";
print_r($names);
echo "<br><br>";

// h.  
$moreNames = array("Zarra", "Cris", "Mila", "Owen");
echo " h. Another array:  <br>";
print_r($moreNames);
echo "<br><br>";

// i
$merged = array_merge($names, $moreNames);
sort($merged);
echo " i. Merged and sorted array:  <br>";
print_r($merged);
?>
</body>
</html>
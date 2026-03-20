<!DOCTYPE html>
<html>
<head>
    <title>String Converter</title>
</head>
<body>

<h2>String Converter</h2>

<?php
function converter($type, $string) {
    if ($type == "upper") {
        return strtoupper($string);
    } elseif ($type == "lower") {
        return strtolower($string);
    } elseif ($type == "title") {
        return ucwords(strtolower($string));
    } else {
        return "Invalid type";
    }
}

$original = "beauty and the best";

echo "<p>The original string: $original</p>";
echo "<p>Converted (UPPER): " . converter("upper", $original) . "</p>";
echo "<p>Converted (lower): " . converter("lower", $original) . "</p>";
echo "<p>Converted (Title): " . converter("title", $original) . "</p>";
?>

</body>
</html>
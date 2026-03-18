<?php
$email = "danyakaplun@gmail.com";

// split using @
list($username, $domain) = explode("@", $email);

echo "Full email: " . $email . "<br>";
echo "Username: " . $username . "<br>";
echo "Domain: " . $domain;
?>
<?php
$name = "Arun Giri";
print_r("Name: ".preg_match("(^[a-z A-Z]{4,15}+$)", $name));
echo "<br><br>";

$phone = 1234567895;
print_r("Phone: ".preg_match("(^[0-9]{10}+$)", $phone));
echo "<br><br>";

$password = "arungiri@12345";
print_r("Password: ".preg_match("(^[a-zA-Z0-9!@#$%^&*]{8,16}+$)", $password));
echo "<br><br>";

$email = "technicaldebug@gmail.com";
print_r("Email: ".preg_match("(^[a-zA-Z0-9.]+@[a-z]+.[a-z]+$)", $email));

?>
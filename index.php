<?php
//Example: (^[a-z]+$)

echo "preg_match<br><br>";

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
echo "<br><br>";

$address = "Contai, West Bengal.";
print_r("Address: ".preg_match("(^[a-zA-Z 0-9,.]{1,50}+$)", $address));
echo "<br><br>";

$url = "a";
print_r("Url: ".preg_match("(^[a-zA-Z 0-9:\/.?=+&_%#]+$)", $url));
echo "<br><br>";

echo "preg_split<br><br>";

$split = "arun giri,1234567895,arungiri@12345,technicaldebug@gmail.com,Contai, West Bengal";
print_r(preg_split("/,/", $split));
echo "<br><br>";

echo "Preg_replace<br><br>";

$replace = "Hello world, welcome to Technical Debug.";
print_r(Preg_replace("/l/","x", $replace));
echo "<br><br>";
?>
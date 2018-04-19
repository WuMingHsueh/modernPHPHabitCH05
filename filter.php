<?php

$email = 'ri3567@hotmail.com';
$saftEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$isEmail = filter_var($email, FILTER_VALIDATE_EMAIL);


$string = "\nIñtërnâtiônàlizætiøn\t";
$saftString = filter_var(
    $string,
    FILTER_SANITIZE_STRING,
    FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);

echo $saftEmail."<br>";
echo ($isEmail !== false)? $isEmail : "FUCK MAIL ERROR";
echo "<hr>";
echo $saftString;

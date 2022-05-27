<?php
$name = $_POST["name"];
$email = $_POST["useremail"];
$date  = $_POST["date of birth"];
$gender = $_POST["gender"];
$country = $_POST["Country"];

$userdata =  $_POST;
$data = implode(" ", $userdata);


$filename = "./userdata.csv";

$handle = fopen($filename, "w");

fwrite($handle, "$data");
fclose($handle);
print_r($userdata)


?>
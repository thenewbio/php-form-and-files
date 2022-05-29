<?php

$userdata =  $_POST;
$data = implode(" ", $userdata);


$filename = "./userdata.csv";

$handle = fopen($filename, "w");

fwrite($handle, "$data");
fclose($handle);
print_r($userdata)


?>
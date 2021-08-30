<?php
$tempf = (int)readline("Enter Temperature in Fahrenheit: ");
$tempc = (($tempf-32)/9)*5;
echo "Temperature in Celcius: ", $tempc;
?>
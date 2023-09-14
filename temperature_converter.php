<?php
echo " Enter the temperature: \n";
$temp = (float)readline();
echo " Select the conversion direction: 1. Celsius To Fahrenheit, 2. Fahrenheit To Celsius \n";
$conversion = (int)readline();

if($conversion == 1){
    $convertedTemperature = ($temp * 9 / 5) + 32;
}
elseif ($conversion == 2){
    $convertedTemperature = ($temp - 32) * 5 / 9;
}
else{
    echo "Error: Select conversion number 1 or 2 ";
}

echo " The converted temperature is: {$convertedTemperature}";
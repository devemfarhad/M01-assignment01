<?php
echo "Enter the number: ";
$number = (int)readline();

if($number % 2 == 0){
    echo "{$number} is an even number";
}
else{
    echo "{$number} is an odd number";
}
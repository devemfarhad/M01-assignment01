<?php
$temperature = 5;

if($temperature >= 30){
    echo "It feels warm";
}
elseif ($temperature < 30 && $temperature >= 20){
    echo "It feels cool.";
}
elseif ($temperature < 20){
    echo "It feels freezing!";
}
else{
    echo "Enter a number ";
}
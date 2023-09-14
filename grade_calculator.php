<?php
echo "Enter Score1: \n";
$test1 = (int)readline("Score01: ");
echo "Enter Score2: \n";
$test2 = (int)readline("Score2");
echo "Enter Score3: \n";
$test3 = (int)readline("Score3");

$average = ($test1 + $test2 + $test3)/3 ;

if($average >= 90){
    $grade = "A";
}
elseif ($average >= 80){
    $grade = "B";
}
elseif ($average >= 70){
    $grade = "C";
}
elseif ($average >= 60){
    $grade = "D";
}
else{
    $grade = "F";
}

echo "Average score : {$average}\n";
echo "Letter grade: {$grade}\n";
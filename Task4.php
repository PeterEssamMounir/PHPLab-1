<?php
$age=6;

switch ($age) {
    case ($age < 5):
        echo "Stay at home" ;
        break;
    case 5:
        echo "Go to Kindergarden";
        break;
    case ($age >=6 && $age <= 12):
        echo "Go to grade".$age -5;
        break;
}



?>
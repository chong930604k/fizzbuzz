<?php

// Loop between numbers 1 to 100
foreach(range(1, 100) as $number){

    // Using arithmetic operator,

    // If the number % 3 and has no remainder, therefore echo Fizz
    if($number % 3 == 0 && $number % 5 == 0){
        echo 'FizzBuzz', '<br>';
    }
    // If the number % 5 and has no remainder, therefore echo Buzz
    elseif($number % 5 == 0){
        echo 'Buzz', '<br>';
    }
    // If the number % 3 or 5 and has no remainder, therefore echo FizzBuzz
    elseif($number % 3 == 0){
        echo 'Fizz', '<br>';
    }
    // For other numbers, just ignore (print out number)
    else{
        echo $number, '<br>';
    }
}

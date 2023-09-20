<?php

/* Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.*/


// By for loop
function evenNumbers($start_number, $end_number, $step)
{
    if ($start_number % 2 != 0) {
        $start_number++;
    }

    for ($i = $start_number; $i <= $end_number; $i += $step) {
        echo $i . ' ';
    }
}

evenNumbers(1, 20, 2);
//Output : 2 4 6 8 10 12 14 16 18 20 

echo "\n";

// By while loop
function evenNumbersUsingWhile($start_number, $end_number, $step)
{
    if ($start_number % 2 != 0) {
        $start_number++;
    }

    while ($start_number <= $end_number) {
        echo $start_number . ' ';
        $start_number += $step;
    }

}

evenNumbersUsingWhile(1, 20, 2);
//Output : 2 4 6 8 10 12 14 16 18 20 

echo "\n";

// By do-while
function evenNumberUsingDoWhile($start_number, $end_number, $step)
{
    if ($start_number % 2 != 0) {
        $start_number++;
    }

    do {
        echo $start_number . ' ';
        $start_number += $step;
    } while ($start_number <= $end_number);
}

evenNumberUsingDoWhile(1, 20, 2);
//Output : 2 4 6 8 10 12 14 16 18 20 
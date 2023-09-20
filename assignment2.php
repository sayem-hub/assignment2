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
//=========================================================================================================================

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
//============================================================================================================================

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
//=============================================================================================================================

echo "\n";

/*Task 2: Skip Multiples of 5
Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
loop encounters a multiple of 5, it should skip that number using the continue statement and
continue to the next iteration.*/

for ($i = 1; $i <= 50; $i++) {

    if ($i % 5 == 0) {
        continue;
    }
    echo $i . ' ';
}
//Output: 1 2 3 4 6 7 8 9 11 12 13 14 16 17 18 19 21 22 23 24 26 27 28 29 31 32 33 34 36 37 38 39 41 42 43 44 46 47 48 49
//=================================================================================================================================

echo "\n";

/*Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.*/

echo "First 10 Fibonacci numbers which is not greater than 100: ";

$first = 0;
$second = 1;

for ($i = 0; $i < 10; $i++) {
    if ($first <= 100) {
        echo $first . ' ';

        $next = $first + $second;
        $first = $second;
        $second = $next;
    } else {
        break;
    }
}
//Output: First 10 Fibonacci numbers which is not greater than 100: 0 1 1 2 3 5 8 13 21 34 
//=====================================================================================================================================

echo "\n";


/* Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function. */

function fibonacci($arg)
{
    $first = 0;
    $second = 1;

    echo "First $arg Fibonacci numbers are: ";

    for ($i = 0; $i < $arg; $i++) {

        echo $first . ' ';

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

fibonacci(15);

//Output: The first 15 Fibonacci numbers: 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 
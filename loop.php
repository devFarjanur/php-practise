<?php

for ($i = 1; $i <= 10; $i++)
    echo $i . '<br>';

echo "<br>";
echo "<br>" . "Q1: Print the first 10 natural numbers and their squares.";
echo "<br>";

for ($i = 1; $i <= 10; $i = $i + 1) {
    echo "Natural number: $i" . " " . "Number with Square:" . ($i * $i) . "<br>";
}

echo "<br>";
echo "<br>" . "Q2: Calculate the sum of the first 10 numbers.";
echo "<br>";

// for loop

$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum = $sum + $i;
    echo "<br>" . $i . " Sum:" . $sum;
}

echo "<br>" . $sum . "<br>";

echo "<br>";
echo "<br>";

// while loop

$sum = 0;
$i = 1;

while ($i <= 10) {
    $sum = $sum + $i;
    echo "<br>" . $i . " Sum:" . $sum;
    $i++;
}

echo "<br>" . $sum . "<br>";

echo "<br>";
echo "<br>" . "Q3: Find the factorial of 5.";
echo "<br>";

// for loop

function forFactorial($num)
{
    $fac = 1;
    for ($i = 1; $i <= $num; $i++) {
        // $fac = $fac * $i;
        $fac *= $i;
    }

    echo "<br>" . "Factorial of 5:" . $fac . "<br>";
}

$num = 5;
forFactorial($num);

echo "<br>";

// for loop factorial without function

$num = 10;
$fac = 1;

for ($i = 1; $i <= $num; $i++) {
    // $fac = $fac * $i;
    $fac *= $i;
}

echo "<br>" . "Factorial of 10:" . $fac . "<br>";

echo "<br>";

// while loop

$num = 15;
$fac = 1;

while ($i <= $num) {
    // $fac = $fac + $i;
    $fac *= $i;
    $i++;
}

echo "<br>" . "Factorial of 15:" . $fac . "<br>";

echo "<br>";

echo "<br>";
echo "<br>" . "Q4: Sum all values in an array.";
echo "<br>";

// for loop

$nums = [2, 4, 6, 8, 10, 12, 15, 14, 0, 1, 2];
$sum = 0;

foreach ($nums as $num)
    // $sum = $sum + $num;
    $sum += $num;

echo "<br>" . "Array Sum:" . $sum . "<br>";
echo "<br>";

// while loop

$nums = [10, 20, 30, 40, 50, 60, 70, 80];
$sum = 0;
$i = 0;

while ($i < count($nums)) {
    // $sum = $sum + $nums[$i];
    $sum += $nums[$i];
    $i++;
}

echo "<br>" . "Array Sum:" . $sum . "<br>";
echo "<br>";

echo "<br>";
echo "<br>" . "Q5: Skip even numbers and stop at 15.";
echo "<br>";

// for loop

$i = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    if ($i > 39) {
        break;
    }
    echo "<br>" . $i . "<br>";
}

// while loop

$i = 0;

while ($i <= 70) {
    if ($i % 2 == 0) {
        continue;
    }
    echo "<br>" . $i . "<br>";
}

?>
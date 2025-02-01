<?php

$userInput = 5;
$count = 1;

echo "<br>" . "User Input: $userInput" . "<br>";

echo "<br>" . "For Loop" . "<br>";

for ($num = 20; $count <= $userInput; $num += 3, $count++) {
    if ($num % 2 == 0) {
        echo "Number is Even" . "<br>";
    } else {
        echo "Number is Odd" . "<br>";
    }
}

echo "<br>" . "While Loop" . "<br>";



?>
<?php

namespace PhpProject\src\Games\GameGcd;

use function PhpProject\Engine\runGame;

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }
    return $a;
}

function play(): void
{
    $task = 'Find the greatest common divisor of given numbers.';
    $rounds = [];
    $numberOfTries = 3;

    for ($i = 0; $i < $numberOfTries; $i++) {
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $question = "$num1 $num2";
        $correctAnswer = (string)gcd($num1, $num2);
        $rounds[] = [$question, $correctAnswer];
    }

    runGame($task, $rounds);
}

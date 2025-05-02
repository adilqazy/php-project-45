<?php

namespace PhpProject\src\Games\GamePrime;

use function PhpProject\Engine\runGame;

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2, $sqrt = sqrt($number); $i <= $sqrt; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function play(): void
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $rounds = [];
    $numberOfTries = 3;

    for ($i = 0; $i < $numberOfTries; $i++) {
        $number = rand(2, 100);
        $correctAnswer = isPrime($number) ? 'yes' : 'no';
        $rounds[] = [(string)$number, $correctAnswer];
    }

    runGame($task, $rounds);
}

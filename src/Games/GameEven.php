<?php

namespace PhpProject\src\Games\GameEven;

use function PhpProject\Engine\runGame;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function play(): void
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $rounds = [];
    $numberOfTries = 3;

    for ($i = 0; $i < $numberOfTries; $i++) {
        $number = rand(1, 100);
        $correctAnswer = isEven($number) ? 'yes' : 'no';
        $rounds[] = [$number, $correctAnswer];
    }

    runGame($task, $rounds);
}

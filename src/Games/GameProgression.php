<?php

namespace PhpProject\src\Games\GameProgression;

use function PhpProject\Engine\runGame;

function makeProgression(int $length, int $step, int $start): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function play(): void
{
    $task = 'What number is missing in the progression?';
    $rounds = [];
    $numberOfTries = 3;

    for ($i = 0; $i < $numberOfTries; $i++) {
        $length = 10;
        $start = rand(1, 10);
        $step = rand(1, 10);
        $progression = makeProgression($length, $step, $start);
        $hiddenIndex = rand(0, $length - 1);
        $correctAnswer = (string)$progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';
        $question = implode(' ', $progression);
        $rounds[] = [$question, $correctAnswer];
    }

    runGame($task, $rounds);
}

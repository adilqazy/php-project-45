<?php

namespace PhpProject\Games\GameProgression;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;

function brainProgression(): void
{
    $name = greet();
    line('What number is missing in the progression?');
    $count = 0;

    for ($i = 0; $i < 3; $i++) {
        $progression = progression();
        $indexDot = rand(0, count($progression) - 1);
        $correctNum = $progression[$indexDot];
        $progression[$indexDot] = '..';
        $progressionLine = implode(' ', $progression);

        line("Question: {$progressionLine}");
        $answer = prompt('Your answer');
        if ((int)$answer === $correctNum) {
            line('Correct!');
            $count += 1;
        } else {
            line("{$answer} is wrong answer ;(. Correct answer was {$correctNum}.\nLet's try again, {$name}!");
            break;
        }
        if ($count === 3) {
            line("Congratulations, {$name}!");
        }
    }
}

function progression(): array
{
    $numbers = [];
    $indexCount = rand(5, 10);
    $step = rand(1, 5);
    $startNum = rand(1, 30);

    for ($i = 0; $i <= $indexCount; $i++) {
        $currElem = $startNum + $i * $step;
        $numbers[] = $currElem;
    }
    return $numbers;
}

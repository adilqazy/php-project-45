<?php

namespace PhpProject\Games\GameProgression;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;
use function PhpProject\Engine\progression;

function brainProgression()
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

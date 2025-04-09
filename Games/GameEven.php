<?php

namespace PhpProject\Games\GameEven;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;
use function PhpProject\Engine\getEvenAnswer;

function brainEven()
{
    $name = greet();

    line('Answer "yes" if the number is even, otherwise answer "no".');
    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        line("Question: {$num}");
        $answer = strtolower(prompt('Your answer'));

        $correct = getEvenAnswer($num);

        if ($correct === $answer) {
            line('Correct!');
            $count += 1;
            continue;
        }
        line("{$answer} is wrong answer ;(. Correct answer was '{$correct}'.\nLet's try again, {$name}!");
        break;
    }
    if ($count === 3) {
        line("Congratulations, {$name}!");
    }
}

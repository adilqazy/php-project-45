<?php

namespace PhpProject\Games\GamePrime;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;
use function PhpProject\Engine\prime;

function brainPrime()
{
    $name = greet();
    $count = 0;
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    while ($count < 3) {
        $number = rand(1, 100);
        $answer = prompt("Question: {$number}");
        $check = '';

        if (prime($number)) {
            $check = 'yes';
        } else {
            $check = 'no';
        }

        if ($check === $answer) {
            line('Correct!');
        } else {
            line("Incorrect!\nLet's try again, {$name}!");
            break;
        }
        $count += 1;
    }
    if ($count === 3) {
        line("Congratulations, {$name}!");
    }
}

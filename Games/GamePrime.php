<?php

namespace PhpProject\Games\GamePrime;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;

function brainPrime(): void
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

function prime(int $num): bool
{
    if ($num <= 1) {
        return false;
    }
    if ($num === 2) {
        return true;
    }
    if ($num % 2 === 0) {
        return false;
    }
    $limit = (int) sqrt($num);

    for ($i = 3; $i <= $limit; $i += 2) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

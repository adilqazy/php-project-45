<?php

namespace PhpProject\Games\GameGcd;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;

function brainFindGcd(): void
{
    $name = greet();
    $count = 0;
    line('Find the greatest common divisor of given numbers.');

    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        line("Question: {$num1} {$num2}");
        $gcd = getGcd($num1, $num2);
        $answer = prompt('Your answer');

        if ((int)$answer === $gcd) {
            line('Correct!');
            $count += 1;
        } else {
            line("{$answer} is wrong answer ;(. Correct answer was {$gcd}.\n Let's try again, {$name}!");
            break;
        }
        if ($count === 3) {
            line("Congratulations, {$name}!");
        }
    }
}

function getGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

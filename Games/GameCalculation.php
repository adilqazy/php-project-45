<?php

namespace PhpProject\Games\GameCalculation;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;

function brainCalculation(): void
{
    $name = greet();
    line('What is the result of the expression?');
    $count = 0;
    $symbols = ['-','+','*'];

    for ($i = 0; $i < 3; $i++) {
        $randKey = array_rand($symbols);
        $num1 = rand(1, 30);
        $num2 = rand(1, 30);
        $randSymbol = $symbols[$randKey];

        $equation = "{$num1} {$randSymbol} {$num2}";
        line("Question: {$equation}");

        $answer = strtolower(prompt('Your answer'));
        $result = calculation($num1, $num2, $randSymbol);

        if ((int)$answer === $result) {
            line('Correct!');
            $count += 1;
        } else {
            line("{$answer} is wrong answer ;(. Correct answer was {$result}.\nLet's try again, {$name}!");
            break;
        }
    }
    if ($count === 3) {
        line("Congratulations, {$name}!");
    }
}

function calculation(int $num1, int $num2, string $operator): int
{
    $result = 0;
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }
    return $result;
}

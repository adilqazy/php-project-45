<?php

namespace PhpProject\Games\GameCalculation;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;
use function PhpProject\Engine\calculation;

function brainCalculation()
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

<?php

namespace PhpProject\src\Games\GameCalculation;

use function PhpProject\Engine\runGame;

function play(): void
{
    $task = 'What is the result of the expression?';
    $operators = ['+', '-', '*'];
    $rounds = [];
    $numberOfTries = 3;

    for ($i = 0; $i < $numberOfTries; $i++) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $operator = $operators[array_rand($operators)];

        $question = "$num1 $operator $num2";
        eval("\$correctAnswer = (string)($num1 $operator $num2);");

        $rounds[] = [$question, $correctAnswer];
    }

    runGame($task, $rounds);
}

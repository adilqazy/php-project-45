<?php

namespace PhpProject\src\Games\GameCalculation;

use function PhpProject\Engine\runGame;

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

function play(): void
{
    $task = 'What is the result of the expression?';
    $operators = ['+', '-', '*'];
    $rounds = [];

    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $operator = $operators[array_rand($operators)];
        $question = "$num1 $operator $num2";
        $correctAnswer = (string)calculation($num1, $num2, $operator);
        $rounds[] = [$question, $correctAnswer];
    }

    runGame($task, $rounds);
}

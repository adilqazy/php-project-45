<?php

namespace PhpProject\Engine;

use function cli\line;
use function PhpProject\Cli\greet;

function runGame(string $task, array $rounds)
{
    $name = greet();
    line($task);

    foreach ($rounds as [$question, $correctAnswer]) {
        line("Question: $question");
        $answer = strtolower(trim(readline('Your answer: ')));

        if ($answer !== strtolower($correctAnswer)) {
            finishGame(false, $name, $correctAnswer, $answer);
            return;
        }

        line('Correct!');
    }

    finishGame(true, $name);
}

function finishGame(bool $success, string $name, string $correctAnswer = '', string $userAnswer = ''): void
{
    if ($success) {
        line("Congratulations, $name!");
    } else {
        line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
        line("Let's try again, $name!");
    }
}

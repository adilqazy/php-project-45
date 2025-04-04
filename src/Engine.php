<?php

namespace PhpProject\Engine;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;

function isEven()
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

function calc()
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

function findGcd()
{
    $name = greet();
    $count = 0;
    line('Find the greatest common divisor of given numbers.');

    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        line("Question: {$num1} {$num2}");
        $gcd = gcd($num1, $num2);
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

function isPrime()
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

#Блок с обрабатывающими функциями

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function progression()
{
    $numbers = [];
    $indexCount = rand(5, 10);
    $step = rand(1, 5);
    $startNum = rand(1, 30);

    for ($i = 0; $i <= $indexCount; $i++) {
        $currElem = $startNum + $i * $step;
        $numbers[] = $currElem;
    }
    return $numbers;
}

function getEvenAnswer(int $num): string
{
    if ($num % 2 === 0) {
        return 'yes';
    }

    return 'no';
}

function calculation(int $num1, int $num2, string $operator)
{
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

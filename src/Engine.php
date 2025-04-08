<?php

namespace PhpProject\Engine;

use function cli\line;
use function cli\prompt;
use function PhpProject\Cli\greet;

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

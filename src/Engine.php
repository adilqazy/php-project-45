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
    for($i = 0; $i < 3; $i++){
        $num = rand(1, 100);
        line("Question: {$num}");
        $answer = strtolower(prompt('Your answer'));
        if($num % 2 === 0 && $answer === 'yes'){
            line('Correct!');
            $count += 1;
        } elseif($num % 2 !== 0 && $answer === 'no') {
            line('Correct!');
            $count += 1;
        } elseif($answer === 'yes') {
            line("{$answer} is wrong answer ;(. Correct answer was 'no'. Let's try again, {$name}!");
            break;
        } elseif($answer === 'no') {
            line("{$answer} is wrong answer ;(. Correct answer was 'yes'. Let's try again, {$name}!");
            break;
        }
    }
    if ($count === 3){
    line("Congratulations, {$name}");
    }
}

function calc()
{
    $name = greet();
    line('What is the result of the expression?');
    $count = 0;
    $symbols = ['-','+','*'];

    for($i = 0; $i < 3; $i++){
        $randKey = array_rand($symbols);
        $num1 = rand(1,30);
        $num2 = rand(1,30);
        $randSymbol = $symbols[$randKey];
        $equation = "{$num1} {$randSymbol} {$num2}";

        line("Question: {$equation}");

        $answer = strtolower(prompt('Your answer'));

        switch ($randSymbol) {
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
        if((int)$answer === $result){
            line('Correct!');
            $count += 1;
        } else {
            line("{$answer} is wrong answer ;(. Correct answer was {$result}. Let's try again, {$name}!");
            break;
        }
    }

}

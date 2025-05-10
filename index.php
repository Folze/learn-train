<?php

function findFactorial($number)
{
    $result = 1;
    for ($i = $number;$i > 1;$i--) {
        $result *= $i;
    }
    return $result;
}

echo findFactorial(8);



$array = ["one","two","three","four"];
foreach ($array as $arr) {
    echo $arr . '\n';
}

function checkEvenNumber($num)
{
    if ($num % 2 === 0) {
        echo "Число четное";
    } else {
        echo "Нечетное";
    }
}


checkEvenNumber(2);
checkEvenNumber(3);



function calculator($num1, $num2, $operation)
{
    switch ($operation) {
        case "+":
            return  $num1 + $num2;
        case "-":
            return  $num1 - $num2;
        case "*":
            return  $num1 * $num2;
        case '/':
            return  $num1 / $num2;
        default:
            return 'Неизвестная операция\n';
    }
}

echo calculator(10, 5, '+');
echo calculator(10, 5, '*');
echo calculator(10, 5, 'asdasdasd');
